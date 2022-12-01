<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Ad;
use App\Models\User;
use App\Mail\AdRemoved;
use App\Mail\AdApproved;
use App\Models\Category;
use App\Models\AdGallery;
use App\Models\CarDetail;
use App\Models\CarFeature;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewUserNotification;

class AdController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ads=Ad::orderBy('updated_at','desc')->paginate(12);
        return view('admin.ads.index')->with('ads',$ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carfeatures=CarFeature::all();
        $categories=Category::all();
        return view('admin.ads.create')->with('categories',$categories)->with('carfeatures',$carfeatures);
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
         'name'=>'required|unique:ads',
         'price'=>'required',
         'phone'=>'required',
         'available_city'=>'required',
         'fuel_type'=>'required',
         'description'=>'required|max:300',
         'car_features'=>'required',
         'featured_image'=>'required|file',
         'car_model'=>'required',
         'company'=>'required',
         'car_color'=>'required',
         'milage'=>'required',
         'condition'=>'required',
         'transmission'=>'required',
         'engine'=>'required',
         'year'=>'required',
         'category_id'=>'required',
         'fuel_type'=>'required',
         'registeration_city' => 'required',
         'owner' => 'required',
        ]);

        $average=Ad::avg('price');
        
        if($average*.02 > $request->price){
        $price_label="Good Price";
        }else{
            $price_label="Fair Price";
        }
        $ad=new Ad();
        if($request->hasFile('featured_image')){

            $featured_image=$request->featured_image;
            $featured_image_name=$featured_image->getClientOriginalName();
            $featured_image->move('images/car-ads',$featured_image_name);
            $ad->featured_image=$featured_image_name;
        }
        $ad->name=$request->name;
        $ad->user_id=auth()->user()->id;
        $ad->slug=Str::slug($request->name);

        $ad->phone=$request->phone;
        $ad->secondary_phone=$request->secondary_phone;
        $ad->available_city=$request->available_city;
        $ad->category_id=$request->category_id;

        $ad->price=$request->price;
        $ad->price_label=$price_label;
        $ad->description=$request->description;
        $ad->status = 1;
      
        $ad->save();

        foreach($request->car_features as $feature){
            $ad->addcarFeatures()->attach($ad->id,[
                'car_feature_id'=>$feature
            ]);
        }
        
      
        if($request->hasFile('gallery_images')){
            $files = $request->file('gallery_images');

       foreach($files as $gallery_image){

            $gallery_image_name=$gallery_image->getClientOriginalName();
            $gallery_image->move('images/gallery',$gallery_image_name);
            $filename=$gallery_image_name;

            AdGallery::create([
                'ad_id' => $ad->id,
                'image' => $filename
            ]);
        }
    }
        $cardetail=new CarDetail();

        $cardetail->ad_id =$ad->id;
        $cardetail->car_model=$request->car_model;
        $cardetail->company=$request->company;
        $cardetail->car_color=$request->car_color;
        $cardetail->milage=$request->milage;
        $cardetail->condition=$request->condition;
        $cardetail->transmission=$request->transmission;
        $cardetail->engine=$request->engine;
        $cardetail->year=$request->year;
        $cardetail->fuel_type=$request->fuel_type;
        $cardetail->registeration_no=$request->registeration_no;
        $cardetail->registeration_city=$request->registeration_city;
        $cardetail->owner= $request->owner;


        $cardetail->save();


     

        toastr()->success("Ad added successfully");
        return \redirect()->route('ads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad=Ad::where('id',$id)->with('carDetails')->with('galleries')->first();

        return view('admin.ads.view')->with('ad',$ad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad=Ad::where('id',$id)->with('carDetails')->first();
        $categories=Category::all();
        $addcarfeatures = DB::table("ad_car_features")->where("ad_car_features.ad_id",$id)
        ->pluck('ad_car_features.car_feature_id')
        ->all();
        $ad_categories = DB::table("ad_categories")->where("ad_categories.ad_id",$id)
        ->pluck('ad_categories.category_id')
        ->all();

        $carfeatures=CarFeature::all();
        return view('admin.ads.edit')->with('ad',$ad)->with('ad_categories',$ad_categories)->with('categories',$categories)->with('carfeatures',$carfeatures)->with('addcarfeatures',$addcarfeatures);
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
            'name'=>'required|unique:ads',
            'price'=>'required',
            'description'=>'required',
            'car_features'=>'required',
            'car_model'=>'required',
            'company'=>'required',
            'car_color'=>'required',
            'milage'=>'required',
            'condition'=>'required',
            'transmission'=>'required',
            'engine'=>'required',
            'year'=>'required',
            'category_id'=>'required',
            'owner' => 'required',
            'available_city'=>'required',

        ]);

        $average=Ad::avg('price');
        
        if($average*.02 > $request->price){
        $price_label="Good Price";
        }else{
            $price_label="Fair Price";
        }
        

          DB::table("ad_car_features")->where("ad_car_features.ad_id",$id)
           ->delete();

        //   DB::table("ad_categories")->where("ad_categories.ad_id",$id)
        //    ->delete();
           DB::table("ad_galleries")->where("ad_galleries.ad_id",$id)
           ->delete();

           $ad=Ad::find($id);


 

           if($request->hasFile('featured_image')){

               $featured_image=$request->featured_image;
               $featured_image_name=$featured_image->getClientOriginalName();
               $featured_image->move('images/car-ads',$featured_image_name);
               $ad->featured_image=$featured_image_name;
           }

           $ad->name=$request->name;
           $ad->slug=Str::slug($request->name);
           $ad->price=$request->price;
           $ad->price_label=$price_label;
           $ad->phone=$request->phone;
           $ad->secondary_phone=$request->secondary_phone;
           $ad->available_city=$request->available_city;
           $ad->category_id=$request->category_id;

           $ad->description=$request->description;
           

           $ad->save();




           foreach($request->car_features as $feature){
              $ad->addcarFeatures()->attach($ad->id,['car_feature_id'=>$feature]);

           }
          
           if($request->hasFile('gallery_images')){
            $files = $request->file('gallery_images');

       foreach($files as $gallery_image){

            $gallery_image_name=$gallery_image->getClientOriginalName();
            $gallery_image->move('images/gallery',$gallery_image_name);
            $filename=$gallery_image_name;

            AdGallery::create([
                'ad_id' => $ad->id,
                'image' => $filename
            ]);
           }
        }
           $cardetail=CarDetail::where('ad_id',$id)->first();

           $cardetail->ad_id =$ad->id;
           $cardetail->car_model=$request->car_model;
           $cardetail->company=$request->company;
           $cardetail->car_color=$request->car_color;
           $cardetail->milage=$request->milage;
           $cardetail->condition=$request->condition;
           $cardetail->transmission=$request->transmission;
           $cardetail->engine=$request->engine;
           $cardetail->year=$request->year;
           $cardetail->fuel_type=$request->fuel_type;
           $cardetail->registeration_no=$request->registeration_no;
           $cardetail->registeration_city=$request->registeration_city;
           $cardetail->owner= $request->owner;
           $cardetail->save();


           toastr()->success("Ad update successfully");

        return \redirect()->route('ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad=Ad::find($id);
        if($ad->count() > 0){
            $ad->status=0;
            $ad->save();
            $ad->delete();

            $user= User::where('id', $ad->user_id)->first();


            $user_details = [
                'user_name' => $ad->user->name,
                'user_email' =>  $ad->user->email,
                'created_at' => $ad->updated_at,
                'message' => "Hi ".$ad->user->name.", Sorry! Your Ad ".".$ad->name."." has now Removed",
                
            ];
            $ad->user->notify(new \App\Notifications\NewUserNotification($user_details));





            Mail::to($user->email)->send(new AdRemoved([
                "email" => "no-reply@autotradia.com",
                "subject" => "Sorry! Your Ad has been Removed!",
                "user_name" => $user->name,
                'created_at' => $ad->created_at,
                'remove_at' => $ad->updated_at,
                'ad_name' => $ad->name,
            ]));


            toastr()->success("Ad deleted successfully");
            return back();
        }
    }



    public function statusChange($id){
        $ad=Ad::find($id);

        if($ad->status=='1'){
            $ad->status='0';
            $ad->save();


            toastr()->success("ad is deactivated successfully");
            return back();
        }else{
            $ad->status='1';
            $ad->save();


            $user_details = [
                'user_name' => $ad->user->name,
                'user_email' =>  $ad->user->email,
                'created_at' => $ad->updated_at,
                'message' => "Hi ".$ad->user->name.", Congrats! Your Ad ".".$ad->name."." has now Approved!",
                
            ];
            $ad->user->notify(new \App\Notifications\NewUserNotification($user_details));


            
            Mail::to($ad->user->email)->send(new AdApproved([
                "email" => "no-reply@autotradia.com",
                "subject" => "Congrats! Your Ad has been Approved!",
                "user_name" => $ad->user->name,
                'created_at' => $ad->created_at,
                'updated_at' => $ad->updated_at,
                'ad_name' => $ad->name,
            ]));
            toastr()->success("ad is activated  successfully");
            return back();
        }
    }





    public function trashed()
    {
        $ads =Ad::onlyTrashed()->paginate(10);
        return view('admin.ads.trashed')->with('ads',$ads);
    }


    public function forceDelete($id){
        $ad=Ad::onlyTrashed()->where('id', $id)->first();
        if($ad!=null){
            $ad->forceDelete();
            toastr()->success("Ad deleted successfully");
            return \redirect()->route('ads.index');
        }
        else{
            toastr()->error("Ad not found");
            return \redirect()->route('ads.index');
        }
    }


    public function restore($id){


        $ad=Ad::onlyTrashed()->where('id', $id)->first();
        if($ad!=null){

            $ad->restore();
            toastr()->success("Ad Restore successfully");
            return \redirect()->route('ads.index');
        }
        else{
            toastr()->error("Ad not found");
            return \redirect()->route('ads.index');

        }

    }
}
