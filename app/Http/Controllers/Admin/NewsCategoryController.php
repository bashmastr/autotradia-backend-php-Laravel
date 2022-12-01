<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class NewsCategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newscategoires=NewsCategory::paginate(10);
        return view('admin.newscategory.index')->with('newscategoires',$newscategoires);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newscategory.create');
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
       
       ]);
       $newscategory=new NewsCategory();
       $newscategory->name=$request->name;
       $newscategory->slug=Str::slug($request->name);
       $newscategory->description=$request->description;
       $newscategory->save();
       toastr()->success("NewsCategory created successfully");
        return \redirect()->route('news-category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newscategory=NewsCategory::find($id);
        return view('admin.newscategory.edit')->with('newscategory',$newscategory);
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
          
          ]);
           $category=NewsCategory::find($id);
          
           $category->name=$request->name;
           $category->slug=Str::slug($request->name);
           $category->description=$request->description;
           $category->save();
           toastr()->success("News Category updated successfully");
           return \redirect()->route('news-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=NewsCategory::find($id);
        if($category!=null){
            $category->status=0;
            $category->save();
            $category->delete();
            toastr()->success("Category deleted successfully");
            return \redirect()->route('news-category.index');
        }
    }




    public function trashed()
    {
        
        $newscategoires =NewsCategory::onlyTrashed()->paginate(10);
        return view('admin.newscategory.trashed')->with('newscategoires',$newscategoires);
    }


    public function forceDelete($id){
        $newscategory=NewsCategory::onlyTrashed()->where('id', $id)->first();
        if($newscategory!=null){
            $newscategory->forceDelete();
            toastr()->success("Event deleted successfully");
            return \redirect()->route('news-category.index');
        }
        else{
            toastr()->error("Event not found");
            return \redirect()->route('news-category.index');
        }
    }


    public function restore($id){


        $newscategory=NewsCategory::onlyTrashed()->where('id', $id)->first();
        if($newscategory!=null){
           
            $newscategory->restore();
            toastr()->success("Event Restore successfully");
            return \redirect()->route('news-category.index');
        }
        else{
            toastr()->error("Event not found");
            return \redirect()->route('news-category.index');
        }
    }

    public function statusChange($id){
        $category=NewsCategory::find($id);
        if($category->status=='1'){
            $category->status='0';
            $category->save();
            toastr()->success("category is deactivated successfully");
            return back();
        }else{
            $category->status='1';
            $category->save();
            toastr()->success("category is activated  successfully");
            return back();
        }
    }

}