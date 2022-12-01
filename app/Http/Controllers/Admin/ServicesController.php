<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HireCar;
use App\Models\ImportACar;
use App\Models\InstantSellCar;
use App\Models\WashService;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
    public function instantsellCars(){
        $instantsellcars=InstantSellCar::paginate(10);
        return view('admin.instantsell.index')->with('instantsellcars',$instantsellcars);
    }

    public function instantsellDetail($id){
        $instantsellcar=InstantSellCar::find($id);
        return view('admin.instantsell.show')->with('instantsellcar',$instantsellcar);
    }

    public function washServices(){
        $washservices=WashService::paginate(10);
        return view('admin.washservices.index')->with('washservices',$washservices);
    }

    public function washServiceDetail($id){
        $washservice=WashService::find($id);
        return view('admin.washservices.show')->with('washservice',$washservice);
    }

    public function impotCars(){
        $importcars=ImportACar::paginate(10);
        return view('admin.importcars.index')->with('importcars',$importcars);
    }

    public function importCarDetail($id){
        $importcar=ImportACar::find($id);
        return view('admin.importcars.show')->with('importcar',$importcar);
    }

    public function hiredCars(){
        $hiredcars=HireCar::paginate(10);
        return view('admin.carhire.index')->with('hiredcars',$hiredcars);
    }

    public function hiredCarDetail($id){
        $hiredcar=HireCar::find($id);
        return view('admin.carhire.show')->with('hiredcar',$hiredcar);
    }
}
