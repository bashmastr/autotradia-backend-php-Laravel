<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $newslist=News::paginate(10);
    
       return view('admin.news.index')->with('newslist',$newslist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newscategory=NewsCategory::all();
        
        return view('admin.news.create')->with('newscategory',$newscategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'news_cat_id'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        $news=new News();
        if($request->hasFile('image')){
            $image= $request->image;
            $image_new_name= $image->getClientOriginalName();
            $image->move('images/news', $image_new_name);
            $news->image= $image_new_name;
        }
        $news->name=$request->name;
        $news->slug=Str::slug($request->name);
        $news->description=$request->description;
        $news->save();


        
        $news->assignNewsCategory()->attach($news->id,[
            'news_category_id'=>$request->news_cat_id
        ]);
    
 
      
        toastr()->success("News created successfully");
         return \redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        $newscategory=NewsCategory::all();
        $assign_news_categories= DB::table("assign_news_categories")->where("assign_news_categories.news_id",$id)
        ->pluck('assign_news_categories.news_category_id')
        ->all();
      
        return view('admin.news.edit')->with(['news'=>$news,'newscategory'=>$newscategory,'assign_news_categories'=>$assign_news_categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name'=>'required',
            'news_cat_id'=>'required',
            'description'=>'required',
           
        ]);
       DB::table("assign_news_categories")->where("assign_news_categories.news_id",$id)
        ->delete();
        $news=News::find($id);
        if($request->hasFile('image')){
            $image= $request->image;
            $image_new_name= $image->getClientOriginalName();
            $image->move('images/news', $image_new_name);
            $news->image= $image_new_name;
        }
        $news->name=$request->name;
        $news->slug=Str::slug($request->name);
        $news->description=$request->description;
        $news->save();
        
       
            $news->assignNewsCategory()->attach($news->id,[
                'news_category_id'=>$request->news_cat_id
            ]);
        
      
        toastr()->success("Event Update successfully");
        return \redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
      
        $news=News::find($id);
     
        if($news!=null){
            $news->status=0;
            $news->save();
            $news->delete();
            toastr()->success("News deleted successfully");
            return \redirect()->route('news.index');
        }
    }




    public function trashed()
    {
        
        $newslist =News::onlyTrashed()->paginate(10);
        return view('admin.news.trashed')->with('newslist',$newslist);
    }


    public function forceDelete($id){
        $news=News::onlyTrashed()->where('id', $id)->first();
        if($news!=null){
            $news->forceDelete();
             $news->assignNewsCategory()->detach();
    
            toastr()->success("Event deleted successfully");
            return \redirect()->route('news.index');
        }
        else{
            toastr()->error("Event not found");
            return \redirect()->route('news.index');
        }
    }


    public function restore($id){

  
        $news=News::onlyTrashed()->where('id', $id)->first();
        if($news!=null){
           
            $news->restore();
            toastr()->success("Event Restore successfully");
            return \redirect()->route('news.index');
        }
        else{
            toastr()->error("Event not found");
            return \redirect()->route('news.index');
        }
    }


    public function statusChange($id){
        $news=News::find($id);
        if($news->status=='1'){
            $news->status='0';
            $news->save();
            toastr()->success("news is deactivated successfully");
            return back();
        }else{
            $news->status='1';
            $news->save();
            toastr()->success("news is activated  successfully");
            return back();
        }
    }

}
