<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LegalPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class LegalPageController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $legalpages=LegalPage::paginate(10);
       return view('admin.legal.index')->with('legalpages',$legalpages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.legal.create');
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
      'description'=>'required'
      ]);
      $legalpage=new LegalPage();
      $legalpage->name=$request->name;
      $legalpage->slug=Str::slug($request->name);
      $legalpage->description=$request->description;
      $legalpage->save();
      toastr()->success("Legal Page Created successfully");
      return \redirect()->route('legal-pages.index');
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
        $legalpage=LegalPage::find($id);
        return view('admin.legal.edit')->with('legalpage',$legalpage);
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
            'description'=>'required'
            ]);
            $legalpage=LegalPage::find($id);
            $legalpage->name=$request->name;
            $legalpage->slug=Str::slug($request->name);
            $legalpage->description=$request->description;
            $legalpage->save();
            toastr()->success("Legal Page Update successfully");
            return \redirect()->route('legal-pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $legalpage=LegalPage::find($id);
        if($legalpage->count() > 0){
            $legalpage->delete();
            toastr()->success("Legal Page Deleted successfully");
            return back();
        }
    }
    public function statusChange($id){
       
        $legalpage=LegalPage::find($id);
        if($legalpage->status=='1'){
            $legalpage->status='0';
            $legalpage->save();
            toastr()->success("legalpage is deactivated successfully");
            return back();
        }else{
            $legalpage->status='1';
            $legalpage->save();
            toastr()->success("legalpage is activated  successfully");
            return back();
        }
    }
}
