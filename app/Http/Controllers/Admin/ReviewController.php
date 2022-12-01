<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews=Review::paginate(10);
        return view('admin.dealerReviews.index')->with('reviews',$reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      
        $review=Review::find($id);
        if($review->status=='1'){
            $review->status='0';
            $review->save();
            toastr()->success("Review status is  Updated successfully");
            return \back();
        }else{
            $review->status='1';
            $review->save();
            toastr()->success("Review status is  Updated successfully");
            return \back();
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $review=Review::find($id);
       if($review->count() > 0 ){
           $review->delete();
           toastr()->success("Review status is  Updated successfully");
           return back();
       }
    }
    public function statusChange($id){
       
        $review=Review::find($id);
        if($review->status=='1'){
            $review->status='0';
            $review->save();
            toastr()->success("review is deactivated successfully");
            return back();
        }else{
            $review->status='1';
            $review->save();
            toastr()->success("review is activated  successfully");
            return back();
        }
    }
}
