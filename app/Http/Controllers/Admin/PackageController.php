<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=Package::paginate(10);
        return view('admin.packages.index')->with('packages',$packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
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
            'durations'=>'required',
            'price'=>'required',
            'max_ads'=>'required',
            'description'=>'required',
        ]);
        $package=new Package();
        if($request->hasFile('picture')){
            $picture=$request->picture;
            $picture_new_name=$picture->getClientOriginalName();
            $picture->move('images/packages',$picture_new_name);
            $package->picture=$picture_new_name;
        }
        $package->name=$request->name;
        $package->slug=Str::slug($request->name);
        $package->durations=$request->durations;
        $package->price=$request->price;
        $package->max_ads=$request->max_ads;
        $package->sale_price=$request->sale_price;
        $package->description=$request->description;
        $package->save();
        toastr()->success("Package created successfully");
        return \redirect()->route('packages.index');
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
        $package=Package::find($id);

        return view('admin.packages.edit')->with('package',$package);
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
            'durations'=>'required',
            'price'=>'required',
            'max_ads'=>'required',
            'description'=>'required',
        ]);
        $package=Package::find($id);
        if($request->hasFile('picture')){
            $picture=$request->picture;
            $picture_new_name=$picture->getClientOriginalName();
            $picture->move('images/packages',$picture_new_name);
            $package->picture=$picture_new_name;
        }
        $package->name=$request->name;
        $package->slug=Str::slug($request->name);
        $package->durations=$request->durations;
        $package->price=$request->price;
        $package->max_ads=$request->max_ads;
        $package->sale_price=$request->sale_price;
        $package->description=$request->description;
        $package->save();
        toastr()->success("Package Updated successfully");
        return \redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package=Package::find($id);
        if($package->count() > 0){
            $package->status=0;
            $package->save();
            $package->delete();
            toastr()->success("Package deleted successfully");
            return \redirect()->route('packages.index');
        }
    }
    public function statusChange($id){
        $package=Package::find($id);
        if($package->status=='1'){
            $package->status='0';
            $package->save();
            toastr()->success("package is deactivated successfully");
            return back();
        }else{
            $package->status='1';
            $package->save();
            toastr()->success("package is activated  successfully");
            return back();
        }
    }


    
    public function trashed()
    {
        $packages =Package::onlyTrashed()->paginate(10);
        return view('admin.packages.trashed')->with('packages',$packages);
    }


    public function forceDelete($id){
        $package=Package::onlyTrashed()->where('id', $id)->first();
        if($package!=null){
            $package->forceDelete();
            toastr()->success("Package deleted successfully");
            return \redirect()->route('packages.index');
        }
        else{
            toastr()->error("Package not found");
            return \redirect()->route('packages.index');
        }
    }


    public function restore($id){


        $package=Package::onlyTrashed()->where('id', $id)->first();
        if($package!=null){

            $package->restore();
            toastr()->success("Package Restore successfully");
            return \redirect()->route('packages.index');
        }
        else{
            toastr()->error("Package not found");
            return \redirect()->route('packages.index');
        }
    }


}
