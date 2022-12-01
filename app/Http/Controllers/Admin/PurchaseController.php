<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    
    public function index(){
        $purchases=Purchase::paginate(10);
       
        return view('admin.purchase.index')->with('purchases',$purchases);
    }

    public function view($id){
        $purchase=Purchase::where('id',$id)->with('package')->with('user')->first();
      
        return view('admin.purchase.view')->with('purchase',$purchase);
    }

    public function print($id){
        $purchase=Purchase::where('id',$id)->with('package')->with('user')->first();
        return view('admin.purchase.print')->with('purchase',$purchase);
    }
}
