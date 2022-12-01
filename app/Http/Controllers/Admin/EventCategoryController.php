<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventCategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventcategoires=EventCategory::paginate(10);
        return view('admin.eventcategories.index')->with('eventcategories',$eventcategoires);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eventcategories.create');
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
       $eventcategory=new EventCategory();
       $eventcategory->name=$request->name;
       $eventcategory->slug=Str::slug($request->name);
       $eventcategory->description=$request->description;
       $eventcategory->save();
       toastr()->success("Category created successfully");
        return \redirect()->route('event-category.index');
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
        $eventcategory=EventCategory::find($id);
        return view('admin.eventcategories.edit')->with('eventcategory',$eventcategory);
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
           $category=EventCategory::find($id);
          
           $category->name=$request->name;
           $category->slug=Str::slug($request->name);
           $category->description=$request->description;
           $category->save();
           toastr()->success("Event Category updated successfully");
           return \redirect()->route('event-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $category=EventCategory::find($id);
        if($category->count() > 0){
            $category->status=0;
            $category->save();
            $category->delete();
            toastr()->success("Category deleted successfully");
            return \redirect()->route('event-category.index');
        }
    }


    public function trashed()
    {
        $eventcategories =EventCategory::onlyTrashed()->paginate(10);
        return view('admin.eventcategories.trashed')->with('eventcategories',$eventcategories);
    }


    public function forceDelete($id){
        $category=EventCategory::onlyTrashed()->where('id', $id)->first();
        if($category!=null){
            $category->forceDelete();
            toastr()->success("Category deleted successfully");
            return \redirect()->route('event-category.index');
        }
        else{
            toastr()->error("Category not found");
            return \redirect()->route('event-category.index');
        }
    }


    public function restore($id){

  
        $category=EventCategory::onlyTrashed()->where('id', $id)->first();
        if($category!=null){
           
            $category->restore();
            toastr()->success("Category Restore successfully");
            return \redirect()->route('event-category.index');
        }
        else{
            toastr()->error("Category not found");
            return \redirect()->route('event-category.index');
        }
    }

    public function statusChange($id){
        $category=EventCategory::find($id);
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
