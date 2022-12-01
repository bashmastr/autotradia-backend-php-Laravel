<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarFeature;
use Illuminate\Http\Request;

class CarFeaturesController extends Controller
{
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $carfeatures=CarFeature::paginate(10);
    
       return \view('admin.carfeatures.index')->with('carfeatures',$carfeatures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('admin.carfeatures.create');
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
            'name'=>['required','unique:car_features']
        ]);
        $carfeature=new CarFeature();
        $carfeature->name=$request->name;
        $carfeature->save();
        toastr()->success("Car Feature added successfully");
        return \redirect()->route('car-features.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carfeature=CarFeature::find($id);
        return \view('admin.carfeatures.edit')->with('carfeature',$carfeature);
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
            'name'=>'required'
        ]);
        $carfeature=CarFeature::find($id);
        $carfeature->name=$request->name;
        $carfeature->save();

        toastr()->success("Car Feature updated successfully");
        return \redirect()->route('car-features.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $carfeature=CarFeature::find($id);
         
        if($carfeature->count() > 0){
            $carfeature->delete();
            toastr()->success("Car Feature Deleted successfully");
        return \redirect()->route('car-features.index');
        }
     
    }
    public function statusChange($id){
        $carfeature=CarFeature::find($id);
        if($carfeature->status=='1'){
            $carfeature->status='0';
            $carfeature->save();
            toastr()->success("carfeature is deactivated successfully");
            return back();
        }else{
            $carfeature->status='1';
            $carfeature->save();
            toastr()->success("carfeature is activated  successfully");
            return back();
        }
    }
}
