<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SocialLinkController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sociallinks=SocialLink::all();
        return view('admin.settings.sociallinks.index')->with('sociallinks',$sociallinks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.sociallinks.create');
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
         'link'=>'required'
        ]);
        $sociallink=new SocialLink();
        $sociallink->name=$request->name;
        $sociallink->slug=Str::slug($request->name);
        $sociallink->link=$request->link;
        $sociallink->save();
        toastr()->success("Package Updated successfully");
        return \redirect()->route('social-links.index');
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
        $sociallink=SocialLink::find($id);
        return view('admin.settings.sociallinks.edit')->with('sociallink',$sociallink);
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
            'link'=>'required'
           ]);
           $sociallink=SocialLink::find($id);
           $sociallink->name=$request->name;
           $sociallink->slug=Str::slug($request->name);
           $sociallink->link=$request->link;
           $sociallink->save();
           toastr()->success("Social link Updated successfully");
           return \redirect()->route('social-links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sociallink=SocialLink::find($id);
        if($sociallink->count() > 0){
            $sociallink->delete();
            toastr()->success("Social link Deleted successfully");
            return back();
        }
    }
    public function statusChange($id){
        $sociallink=SocialLink::find($id);
        if($sociallink->status=='1'){
            $sociallink->status='0';
            $sociallink->save();
            toastr()->success("sociallink is deactivated successfully");
            return back();
        }else{
            $sociallink->status='1';
            $sociallink->save();
            toastr()->success("sociallink is activated  successfully");
            return back();
        }
    }
}
