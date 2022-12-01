<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Str;

use App\Models\Ad;
use Carbon\Carbon;
use App\Models\HireCar;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\CarDetail;
use App\Models\ImportACar;
use App\Models\WashService;
use App\Mail\PackageExpired;
use Illuminate\Http\Request;
use App\Models\InstantSellCar;
use App\Models\CarDetailDropdown;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index(){


        $notifications = auth()->user()->unreadNotifications;

        
   

        $active_dashboard= 'active';


        $count=0; 
        $car_sell_requests=InstantSellCar::orderBy('id', 'DESC')->take(3)->get();
        $car_wash_requests= WashService::orderBy('id', 'DESC')->take(3)->get();
        $import_car_requests= ImportACar::orderBy('id', 'DESC')->take(3)->get();
        $car_hire_requests= HireCar::orderBy('id', 'DESC')->take(3)->get();


        $car_sell_count=InstantSellCar::get()->count();
        $car_wash_count= WashService::get()->count();
        $import_car_count= ImportACar::get()->count();
        $car_hire_count= HireCar::get()->count();

        $total_requests= $car_sell_count+$car_wash_count+$import_car_count+$car_hire_count;

        if($total_requests > 0){
            $car_sell_percentage=number_format((float)( ($car_sell_count/$total_requests)*100), 2, '.', '');
            $car_wash_percentage=number_format((float)( ($car_wash_count/$total_requests)*100), 2, '.', '');
            $import_car_percentage=number_format((float)( ($import_car_count/$total_requests)*100), 2, '.', '');
            $car_hire_percentage=number_format((float)( ($car_hire_count/$total_requests)*100), 2, '.', '');
    
        }
        else{
            $car_sell_percentage=0;
            $car_wash_percentage=0;
            $import_car_percentage=0;
            $car_hire_percentage=0;

        }

       $luxury_category= Category::where('slug', 'luxury-cars')->first(); 

       if($luxury_category != null){
        $luxury_cars_count= DB::table('ad_categories')->where('category_id', $luxury_category->id)->get()->count();
       }   
       
       else{
        $luxury_cars_count=0;
       }

       
       $used_cars=  CarDetail::where('condition', 'used')->get()->count();
       $new_cars=  CarDetail::where('condition', 'new')->get()->count();


       $pending_ads= Ad::where('status', 0)->get()->count();
       $active_ads= Ad::where('status', 1)->get()->count();
       $trashed_ads= Ad::onlyTrashed()->get()->count();



        return view('admin.index', compact('count','car_sell_requests','car_wash_requests',
        'car_sell_percentage','car_wash_percentage','import_car_percentage','car_hire_percentage',
        'used_cars','new_cars','luxury_cars_count', 'pending_ads','active_ads','trashed_ads',
        'import_car_requests','car_hire_requests'))->with('active_dashboard', $active_dashboard);
    }



    public function CreateCarDetailDropdowns(){
        $active_link= 'active';
        return view('admin.settings.cardetailsdropdown')->with('active_link', $active_link);
    }


    
    public function AllCarDetailDropdowns(){
        $active_link= 'active';
        $details= CarDetailDropdown::paginate(12);
        // dd($details[0]->year);
        foreach ($details as $detail)  {

            $contains = Str::contains($detail->year, ',');

            
            if ($contains){

                $array1 = explode(',' , $detail->year);
                $start= 0;
                $last = count($array1)-1;

                $detail->year  =  "from ".$array1[$last]." to ". $array1[$start];
                // dd($detail->year);
            }
        };
        //  dd(count($details[0]->year));
        return view('admin.settings.cardetaildropdowntable')->with('details', $details)->with('active_link', $active_link);
    }


    
    public function EditCarDetailDropdowns($id){
        $active_link= 'active';
        $detail= CarDetailDropdown::findorfail($id);
        return view('admin.settings.editcardetaildropdown')->with('detail', $detail)->with('active_link', $active_link);
    }

    public function UpdateCarDetailDropdowns(Request $request, $id){
      
        $detail= CarDetailDropdown::findorfail($id);
        $detail->make=$request->make;
        $detail->model=$request->models;
        $detail->year= $request->years;
        $detail->variations= $request->variations ? : '';
        
        $detail->save();
        toastr()->success("Records updated successfully");
        return \redirect()->route('admin.cardetaildropdown.all');
    }


    public function DeleteCarDetailDropdowns($id){
        $detail= CarDetailDropdown::findorfail($id);
        $detail->delete();
        toastr()->success("Records Deleted successfully");
        return \redirect()->route('admin.cardetaildropdown.all');
    }




    public function StoreCarDetailDropdowns(Request $request){

       
          
        $request->validate([
            'make'=>'required|unique:car_detail_dropdowns',
            'models'=>'required',
            'years'=>'required',
             
         
         ]);


        $dropdown= new CarDetailDropdown();
        $dropdown->make= $request->make;
        $dropdown->model= $request->models;
        $dropdown->year= $request->years;
        $dropdown->variations= $request->variations;
        
        $dropdown->save();
        toastr()->success("Records Saved Succesfully");
        return \redirect()->route('admin.cardetaildropdown.all');


        
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    



}
