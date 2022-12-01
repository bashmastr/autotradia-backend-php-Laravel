<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       


        $categories=Category::paginate(10);

        
      
        return view('admin.categories.index')->with('categories',$categories);
    }


    public function trashed()
    {
      
        $categories=Category::onlyTrashed()->paginate(10);
      
        return view('admin.categories.trashed')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.categories.create');
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
           'name'=>'required|string|unique:categories',
           'image'=>'required',
          
        ]);
        $category=new Category();
        if($request->hasFile('image')){
           $image= $request->image;
           $image_new_name= $image->getClientOriginalName();
           $image->move('images/categories', $image_new_name);
           $category->image= $image_new_name;
        }
        $category->name=$request->name;
        $category->slug=Str::slug($request->name);
        $category->description=$request->description;
        $category->save();
        toastr()->success("Category created successfully");
        return \redirect()->route('category.index');
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
      
        $category=Category::findOrfail($id);
        return view('admin.categories.edit')->with('category',$category);
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
         $category=Category::find($id);
        
         if($request->hasFile('image')){
             $image= $request->image;
             $image_new_name= $image->getClientOriginalName();
             $image->move('images/categories', $image_new_name);
             $category->image= $image_new_name;
         }
         $category->name=$request->name;
         $category->slug=Str::slug($request->name);
         $category->description=$request->description;
         $category->save();
         toastr()->success("Category updated successfully");
         return \redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        
     
       $category=Category::find($id);
       if($category->count() > 0){
           $category->status=0;
           $category->save();
           $category->delete();
           toastr()->success("Category deleted successfully");
           return \redirect()->route('category.index');
       }
    }


    public function forceDelete($id){
        $category=Category::onlyTrashed()->where('id', $id)->first();
        if($category!=null){
            $category->forceDelete();
            toastr()->success("Category deleted successfully");
            return \redirect()->route('category.index');
        }
        else{
            toastr()->error("Category not found");
            return \redirect()->route('category.index');
        }
    }


    public function restore($id){

  
        $category=Category::onlyTrashed()->where('id', $id)->first();
        if($category!=null){
            $category->status=1;
           
            $category->restore();
            toastr()->success("Category Restore successfully");
            return \redirect()->route('category.index');
        }
        else{
            toastr()->error("Category not found");
            return \redirect()->route('category.index');
        }
    }
   

    public function statusChange($id){
        $category=Category::find($id);
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
