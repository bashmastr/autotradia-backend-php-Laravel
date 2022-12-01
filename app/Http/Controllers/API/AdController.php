<?php

namespace App\Http\Controllers\API;

use App\Models\Ad;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Purchase;
use App\Mail\AdSubmitted;
use App\Models\AdGallery;
use App\Models\CarDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InspectionReport;
use App\Models\CarDetailDropdown;
use App\Http\Resources\AdResource;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;

class AdController extends Controller
{
   
    public function getAllDataCount(){
        $make = DB::table('car_details')->join('ads','car_details.ad_id','ads.id')
            ->where('ads.status','=',1)
            ->select('company', DB::raw('count(*) as total'))
            ->groupBy('company')
            ->get();

        $model = DB::table('car_details')->join('ads','car_details.ad_id','ads.id')
            ->where('ads.status','=',1)
            ->select('car_model', DB::raw('count(*) as total'))
            ->groupBy('car_model')
            ->get();

        $available_city = DB::table('ads')->where('status','=','1')
            ->select('available_city', DB::raw('count(*) as total'))
            ->groupBy('available_city')
            ->get();

        $transmission = DB::table('car_details')->join('ads','car_details.ad_id','ads.id')
             ->where('ads.status','=',1)
            ->select('transmission', DB::raw('count(*) as total'))
            ->groupBy('transmission')
            ->get();

        $color = DB::table('car_details')->join('ads','car_details.ad_id','ads.id')
            ->where('ads.status','=',1)
            ->select('car_color', DB::raw('count(*) as total'))
            ->groupBy('car_color')
            ->get();

        $reg_city = DB::table('car_details')
            ->join('ads','car_details.ad_id','ads.id')
            ->where('ads.status','=',1)
            ->select('registeration_city', DB::raw('count(*) as total'))
            ->groupBy('registeration_city')
            ->get();

                           
        return response()->json(['status_code'=>200,'data'=>[$make,$model,$available_city,$transmission,$color,$reg_city],'message'=>" filter counts"]);
    }

    public function adCategory(){
        $categories=Category::where('status','1')->get();
        if($categories!=null){
            return \response()->json(['status_code'=>200,'data'=>CategoryResource::collection($categories)->paginate(7),'message'=>" categories"]);
        }
         return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No Categories are Found']);

    }
    public function allAds(){
    
        $ads=Ad::where('status','1')->orderBy('updated_at','desc')->get();
       
        $purchase_ids=Purchase::where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
        if($purchase_ids->count() > 0){
            $featured_id=DB::table('featured_ad')->WhereIn('purchase_id',$purchase_ids)->pluck('ad_id');
        //  return response()->json(['purchase_ids'=>$purchase_ids,"featured_id"=>$featured_id]);
        }
        $featured_id = array_map('intval', json_decode($featured_id, true));
    
        //  $featured_id=json_decode($featured_id);
        $wishlist = [];
        if(auth('api')->user()!=null){
            $wishlist = DB::table('wish_lists')->where('user_id',auth('api')->user()->id)->get();
        }
        // $wishlist =WishlistResource::collection(Wishlist::where("user_id",auth('api')->user()->id)->get());
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'wishlist'=>$wishlist,'featured'=>$featured_id,'message'=>'List of ads']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
    }
    public function sortAdBy($sort){
        $ads;
        if($sort === "date_recent"){
            $ads = Ad::where('status','1')->orderBy('updated_at','desc')->get();
          
        }
        if($sort === "date_oldest"){
          
            $ads = Ad::where('status','1')->orderBy('updated_at','asc')->get();
          
        }
        if($sort === "price_low"){

            $ads = Ad::where('status','1')->orderBy(DB::raw('CAST(price AS FLOAT)'),'asc')->get();
            // $ads = $ads->sort();
        }
        if($sort === "price_high"){
            $ads = Ad::where('status','1')->orderBy(DB::raw('CAST(price AS FLOAT)'),'desc')->get();
        }
        if($sort === "model_latest"){
            
            //$ads = Ad::where('status','1')->with('carDetails')->orderBy('carDetails.car_model','desc')->get();
            $ads = Ad::where('status','1')
                ->join('car_details', 'car_details.ad_id','=', 'ads.id')
                ->orderBy(DB::raw('CAST(car_details.year AS FLOAT)'),'desc')
                ->get();
        
        }
        if($sort === "model_oldest"){
            $ads = Ad::where('status','1')
                ->join('car_details', 'car_details.ad_id', '=','ads.id')
                ->orderBy(DB::raw('CAST(car_details.year AS FLOAT)'),'asc')
                ->get();
            // return \response()->json($ads);
        }
        if($sort === "milage_low"){
            $ads = Ad::where('status','1')
                ->join('car_details', 'car_details.ad_id', '=', 'ads.id')
                ->orderBy(DB::raw('CAST(car_details.milage AS FLOAT)'),'asc')
                ->get();
        }
        if($sort === "milage_high"){
            $ads = Ad::where('status','1')
                ->join('car_details', 'car_details.ad_id', '=', 'ads.id')
                ->orderBy(DB::raw('CAST(car_details.milage AS FLOAT)'),'desc')
                ->get();
        }

        $purchase_id=DB::table('featured_ad')->pluck('purchase_id');
        $purchase_ids=Purchase::whereIn('id',$purchase_id)->where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
        $ad_ids=DB::table('featured_ad')->whereIn('purchase_id',$purchase_ids)->pluck('ad_id');
        $featured_id=Ad::whereIn('id',$ad_ids)->where('status','1')->pluck('id');
        
        $wishlist = [];
        if(auth('api')->user()!=null){
            $wishlist = DB::table('wish_lists')->where('user_id',auth('api')->user()->id)->get();
        }

        $data = [];
        $total = 0;
        $count = 0;
        while($count < sizeof($ads)){
            $FeatureAdsCount = 0;
            while($FeatureAdsCount < sizeof($featured_id)){
                if ($ads[$count]["id"] == $featured_id[$FeatureAdsCount]){
                  
                    $data[$total] = $ads[$count];
                    $total = $total + 1;
                    break;
                }
                $FeatureAdsCount = $FeatureAdsCount + 1;
            }
            $count = $count + 1;
            
        };

        $count = 0;
        $flag = 0;
        while($count < sizeof($ads)){
            $FeatureAdsCount = 0;
            while($FeatureAdsCount < sizeof($featured_id)){
                if ($ads[$count]["id"] == $featured_id[$FeatureAdsCount]){
                    $flag = 1;
                    break;
                }
                $FeatureAdsCount = $FeatureAdsCount + 1;
            }
                
            if ($flag == 0){
                $data[$total] = $ads[$count];
                $total = $total + 1;
            }
            $flag = 0;
            $count = $count + 1;
            
        };
       // return \response()->json($data);
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($data)->paginate(7),'wishlist'=>$wishlist,'featured'=>$featured_id,'message'=>'List of ads test']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);



    }
    public function latestAds(){
        $ads=Ad::where('status','1')->latest()->limit(5)->get();
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads),'message'=>'List of ads']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
    }
    public function removedAds(){
        $ads =Ad::onlyTrashed()->get();
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'message'=>'List of ads']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
    }
    public function getAd($slug){
        $ads=Ad::where('status','1')->where('slug',$slug)->get();
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads),'message'=>'Specific Ad']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
    }

    public function getPopularAds(){
        $ads=Ad::where('status','1')->inRandomOrder()->take(3)->get();
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads),'message'=>'Common Ads']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Common Ads are Found']);
    }
    public function getCommonAds($id){
        $ad_ids = DB::table('ad_categories')->where('category_id',$id)->pluck('ad_id');

        $ads=Ad::where('status','1')->whereIn('id',$ad_ids)->take(3)->get();
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads),'message'=>'Common Ads']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Common Ads are Found']);
    }

    public function FeatureAds(){
        $purchase_ids=Purchase::where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
        if($purchase_ids->count() > 0){
            $featured_id=DB::table('featured_ad')->whereIn('purchase_id',$purchase_ids)->pluck('ad_id');
       
            if($featured_id->count() > 0){
             
                $featured_ad=AdResource::collection(Ad::whereIn('id',$featured_id)->get())->paginate(7);
             
                if($featured_ad->count() > 0){
                return \response()->json(['status_code'=>200,'data'=>$featured_ad,'message'=>'Featured ads List']);
                }
                return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No featured Ads are Found']);
            }
            return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No featured Ads are Found']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No featured Ads are Found']);
    }
    public function getSellerAd($id){
       
        $ads=Ad::where('id',$id)->where('user_id',auth('api')->user()->id)->get();
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads),'message'=>'Specific Ad']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
    }
    public function sellerAds($status){
        if(\auth('api')->user()!=null){
            if($status === "all"){
                $ads=Ad::where('user_id',auth('api')->user()->id)->get();
                if($ads->count() > 0){
                    return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'message'=>'seller ads List']);
                }
            }else{
               
                $purchase_id=DB::table('featured_ad')->pluck('purchase_id');
                $purchase_ids=Purchase::whereIn('id',$purchase_id)->where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
                $ad_ids=DB::table('featured_ad')->whereIn('purchase_id',$purchase_ids)->pluck('ad_id');
                if($ad_ids->count() >0){
                    $featured_id=Ad::whereIn('id',$ad_ids)->where('status','1')->pluck('id');  
                }
                $ads=Ad::where('user_id',auth('api')->user()->id)->where('status',$status)->get();
                if($ads->count() > 0){
                    return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'featured'=>$featured_id,'message'=>'seller ads List test']);
                }
            }
            return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
        }else{
            return response()->json([
                'message' => 'Unauthorized',
                'status_code'=>401
            ], 401);
        }
    }
    public function sellerRemovedAds(){
        if(\auth('api')->user()!=null){
            $ads=Ad::onlyTrashed()->where('user_id',auth('api')->user()->id)->get();
            if($ads->count() > 0){
                return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'message'=>'seller removed ads List']);
            }
            return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
        }
        else{
            return response()->json([
                'message' => 'Unauthorized',
                'status_code'=>401
            ], 401);
        }
    }

    public function sellerFeatureAds(){
        if(auth('api')->user()!=null){
         $ads_id=Ad::where('user_id',auth('api')->user()->id)->pluck('id');

         $purchase_id=DB::table('featured_ad')->whereIn('ad_id',$ads_id)->pluck('purchase_id');

         if($purchase_id->count() > 0){
            $purchase_ids=Purchase::whereIn('id',$purchase_id)->where('user_id',auth('api')->user()->id)->where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
            if($purchase_ids->count() > 0){
                $featured_id=DB::table('featured_ad')->whereIn('ad_id',$ads_id)->where('purchase_id',$purchase_ids)->pluck('ad_id');
                $featured_ad=AdResource::collection(Ad::where('user_id',auth('api')->user()->id)->whereIn('id',$featured_id)->get())->paginate(7);
                if($featured_ad->count() > 0){
                    return \response()->json(['status_code'=>200,'data'=>$featured_ad,
                    'message'=>'seller ads List']);
                }
                return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Ads are Found']);
            }
            return \response()->json(['status_code'=>404,'data'=>'','message'=>'your purchase packages has been expired']);
         }
         return \response()->json(['status_code'=>404,'data'=>'','message'=>'You have not any featured ads']);
        }else{
         return response()->json([
             'message' => 'Unauthorized',
             'status_code'=>401
         ], 401);
        }
     }
    public function adStore(Request $request)
    {
       
        $validator=Validator::make($request->all(),[
            'car_name'=>'required',
            'price'=>'required',
            'ad_description'=>'required|max:300',
            'featured_image'=>'required',
            'car_color'=>'required',
            'owner' => 'required',
            'mileage'=>'required',
            'transmission'=>'required',
            'engine'=>'required',
            'available_city'=>'required',
            'category_id'=>'required',
        ]);
        if($validator->fails()){
            return \response()->json(['data'=>$validator->messages(),'status_code'=>400]);
        }
        if(auth('api')->user()!=null){
            $ad=new Ad();
           
            if($request->hasFile('featured_image')){

                $featured_image=$request->featured_image;
                $featured_image_name=$featured_image->getClientOriginalName();
               
                $featured_image->move('images/car-ads',$featured_image_name);
              
                $ad->featured_image=$featured_image_name;
            }
            $average=Ad::avg('price');

            if($average*.02 > $request->price){
            $price_label="Good Price";
            }else{
                $price_label="Fair Price";
            }
          
            $ad->name= $request->car_name;
            $ad->user_id=auth('api')->user()->id;
          
            $ad->slug=Str::slug($request->car_name."-".mt_rand(000001, 999999));
            $ad->price=$request->price;
            $ad->price_label=$price_label;
            $ad->phone=$request->phone;
            $ad->available_city=$request->available_city;
            $ad->category_id=$request->category_id;
            $ad->description=$request->ad_description;

            $ad->status = 1;

            $ad->save();
            foreach(explode(",",$request->car_features) as $feature){
                $ad->addcarFeatures()->attach($ad->id,[
                    'car_feature_id'=>$feature
                ]);
            }
          
            if($request->hasFile('rest_img')){
             foreach( $request->rest_img as $gallery_image){
                    $gallery=new AdGallery();
                    $gallery_image_name=$gallery_image->getClientOriginalName();
                    $gallery_image->move('images/car-ads',$gallery_image_name);
                    $gallery->image=$gallery_image_name;
                    $gallery->ad_id=$ad->id;
                    $gallery->save();
                }
            }
            $carDetails = explode(" ",$request->car_name);
            $cardetail=new CarDetail();
            $cardetail->ad_id =$ad->id;
            $cardetail->fuel_type =$request->fuel_type;
            $cardetail->car_model=$carDetails[1];
            $cardetail->company=$carDetails[0];
            $cardetail->year=$carDetails[2];
            $cardetail->car_color=$request->car_color;
            $cardetail->milage=$request->mileage;
            $cardetail->owner=$request->owner;
            $cardetail->condition=$request->condition;
            $cardetail->transmission=$request->transmission;
            $cardetail->engine=$request->engine;
            $cardetail->registeration_no=$request->registeration_no;
            $cardetail->registeration_city=$request->registeration_city;
            $cardetail->save();

            $data = $request->all();

            if(array_key_exists("inspection_top",$data)){
                $finalArray = array();

                foreach ($data["inspection_top"] as $key=>$iterate) {
                    $image_name = '';
                    if(isset($data["inspection_img"][$key])){
                        $image_name = $data["inspection_img"][$key]->getClientOriginalName();
                        $data["inspection_img"][$key]->move('images/inspection-reports/'.$ad->id.'/', $image_name);
                    }

                    array_push($finalArray, array(
                        'ad_id' => $ad->id,
                        'img' => $image_name ?? "",
                        'comment' => $data["inspection_comment"][$key] ?? "",
                        'type' => $data["inspection_type"][$key],
                        'top' => $data["inspection_top"][$key],
                        'left' => $data["inspection_left"][$key]
                    ));
                }
                InspectionReport::insert($finalArray);
            }



            $details = [
                'user_name' => auth('api')->user()->name,
                'user_email' =>  auth('api')->user()->email,
                'created_at' => date('d-m-yy H:i:s',strtotime($cardetail->created_at)),
                'message'=> 'Hi Admin!! New Ad Has Been Posted!'
            ];

            $admin_user= User::where('role_id','a')->first();


            $admin_user->notify(new \App\Notifications\NewUserNotification($details));


            $user_details = [
                'user_name' => auth('api')->user()->name,
                'user_email' =>  auth('api')->user()->email,
                'created_at' => date('d-m-yy H:i:s',strtotime($cardetail->created_at)),
                'message' => "Hi ".auth('api')->user()->name.", Your Ad : ".$ad->name." is successfully created & is in pending",

                ];
            auth('api')->user()->notify(new \App\Notifications\NewUserNotification($user_details));

            Mail::to(auth('api')->user()->email)->send(new AdSubmitted([
                "from" => "no-reply@autotradia.com",
                "subject" => "Great! Your Ad has been submitted!",
                "user_name" => auth('api')->user()->name,
                'submit_date' => $ad->created_at,
                'ad_name' => $ad->name,
            ]));

            return \response()->json(['status_code'=>200,'data'=>$cardetail,'message'=>'Ad has been saved']);
        }
        else{
            return response()->json([
                'message' => 'Unauthorized',
                'status_code'=>401
            ]);
        }
    }


    public function cardetaildropdowns(){
        $dropdowns= CarDetailDropdown::all();
        $categories= Category::where('status', 1)->get();

        return \response()->json(['status_code'=>200,'data'=> ['data' => $dropdowns, 'categories' => $categories] ,'message'=>'All Dropdowns & categories are fetched']);
    }
    public function updateAd(Request $request, $id)
    {

        $validator=Validator::make($request->all(),[
            'car_name'=>'required',
            'price'=>'required',
            'ad_description'=>'required|max:300',
            'car_color'=>'required',
            'mileage'=>'required',
            'transmission'=>'required',
            'engine'=>'required',
            'category_id'=>'required',
            'owner' => 'required',
         
        ]);
        if($validator->fails()){
            return \response()->json(['data'=>$validator->messages(),'status_code'=>400]);
        }
        if(auth('api')->user()!=null){
            DB::table("ad_car_features")->where("ad_car_features.ad_id",$id)
               ->delete();

            DB::table("ad_categories")->where("ad_categories.ad_id",$id)
               ->delete();
               $average=Ad::avg('price');

               if($average*.02 > $request->price){
               $price_label="Good Price";
               }else{
                   $price_label="Fair Price";
               }
            $ad=Ad::find($id);

            $ad->name= $request->car_name;
         
            $ad->slug=Str::slug($request->car_name."-".mt_rand(000001, 999999));
            $ad->price=$request->price;
            $ad->price_label=$price_label;
            $ad->phone=$request->phone;
            $ad->category_id=$request->category_id;
            $ad->available_city=$request->available_city;
            $ad->price_label=$price_label;
            $ad->description=$request->ad_description;

            $ad->status = 1;
            $ad->save();

            $user= User::where('id', $ad->user_id)->first();

            foreach(explode(",",$request->car_features) as $feature){
                $ad->addcarFeatures()->attach($ad->id,[
                    'car_feature_id'=>$feature
                ]);
            }

            DB::table("ad_galleries")->where("ad_id",$ad->id)
               ->delete();

            if($request->has('old_images')){
                $arr = json_decode($request->old_images);
                if(count($arr) > 1){
                    $ad->featured_image=$arr[0];

                    for($i=1;$i<count($arr);$i++){
                        $gallery=new AdGallery();
                        $gallery->image=$arr[$i];
                        $gallery->ad_id=$ad->id;
                        $gallery->save();
                    }
                }else{
                    $ad->featured_image=$arr[0];
                }

                if($request->hasFile('featured_image')){
                    $gallery=new AdGallery();
                    $featured_image=$request->featured_image;
                    $featured_image_name=$featured_image->getClientOriginalName();
                    $featured_image->move('images/car-ads',$featured_image_name);
                    $gallery->image=$featured_image_name;
                    $gallery->ad_id=$ad->id;
                    $gallery->save();
                }
                if($request->hasFile('rest_img')){
                    foreach($request->rest_img as $gallery_image){
                        $gallery=new AdGallery();
                        $gallery_image_name=$gallery_image->getClientOriginalName();
                        $gallery_image->move('images/car-ads',$gallery_image_name);
                        $gallery->image=$gallery_image_name;
                        $gallery->ad_id=$ad->id;
                        $gallery->save();
                    }
                }
            }else{
                if($request->hasFile('featured_image')){
                    $featured_image=$request->featured_image;
                    $featured_image_name=$featured_image->getClientOriginalName();
                    $featured_image->move('images/car-ads',$featured_image_name);
                    $ad->featured_image=$featured_image_name;
                }
                if($request->hasFile('rest_img')){
                    foreach($request->rest_img as $gallery_image){
                        $gallery=new AdGallery();
                        $gallery_image_name=$gallery_image->getClientOriginalName();
                        $gallery_image->move('images/car-ads',$gallery_image_name);
                        $gallery->image=$gallery_image_name;
                        $gallery->ad_id=$ad->id;
                        $gallery->save();
                    }
                }
            }
             $carDetails = explode(" ",$request->car_name);
             $cardetail=CarDetail::where('ad_id',$ad->id)->first();
            $cardetail->ad_id =$ad->id;
            $cardetail->fuel_type =$request->fuel_type;
             $cardetail->car_model=$carDetails[1];
            $cardetail->company=$carDetails[0];
            $cardetail->year=$carDetails[2];
            $cardetail->car_color=$request->car_color;
            $cardetail->milage=$request->mileage;
            $cardetail->condition=$request->condition;
            $cardetail->transmission=$request->transmission;
            $cardetail->engine=$request->engine;
            $cardetail->owner=$request->owner;
            $cardetail->registeration_no=$request->registeration_no;
            $cardetail->registeration_city=$request->registeration_city;
            $cardetail->save();

            $data = $request->all();

            if(array_key_exists("inspection_top",$data)){
                $finalArray = array();
                DB::table("inspection_reports")->where("ad_id",$ad->id)
                ->delete();
                foreach ($data["inspection_top"] as $key=>$iterate) {
                    $image_name = '';
                    if(isset($data["inspection_img"][$key]) && $data["inspection_img"][$key] !== '' ){
                        $image_name = $data["inspection_img"][$key]->getClientOriginalName();
                        $data["inspection_img"][$key]->move('images/inspection-reports/'.$ad->id.'/', $image_name);
                    }

                    array_push($finalArray, array(
                        'ad_id' => $ad->id,
                        'img' => $image_name ?? "",
                        'comment' => $data["inspection_comment"][$key] ?? "",
                        'type' => $data["inspection_type"][$key],
                        'top' => $data["inspection_top"][$key],
                        'left' => $data["inspection_left"][$key]
                    ));
                }
                InspectionReport::insert($finalArray);


                $details = [
                    'user_name' => auth('api')->user()->name,
                    'user_email' =>  auth('api')->user()->email,
                    'created_at' => date('d-m-yy H:i:s',strtotime( $cardetail->updated_at)),
                    'message'=> 'Hi Admin!! An Ad has been Updated By Seller!'
                ];

                $admin_user= User::where('role_id','a')->first();
                $admin_user->notify(new \App\Notifications\NewUserNotification($details));


            }
            return \response()->json(['status_code'=>200,'data'=>"",'message'=>'Your Ad has been updated']);
        }

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
        if($ad!=null){
            $ad->status=0;
            $ad->save();
            $ad->delete();
            return \response()->json(['status_code'=>200,'data'=>"",'message'=>'Your ad has been removed']);
            $details = [
                'user_name' => auth('api')->user()->name,
                'user_email' =>  auth('api')->user()->email,
                'created_at' => $ad->updated_at,
                'message'=> 'Hi Admin!! An Ad has been deleted By Seller!'
            ];
            $admin_user= User::where('role_id','a')->first();
            $admin_user->notify(new \App\Notifications\NewUserNotification($details));
        }
        return \response()->json(['status_code'=>404,'data'=>"",'message'=>'Sorry, No Ads are Found']);
    }

    public function restoreAd($id){
        $ad=Ad::onlyTrashed()->where('id', $id)->first();
        if($ad!=null){
            $ad->restore();
            toastr()->success("Ad Restore successfully");
            return \response()->json(['status_code'=>200,'data'=>[],'message'=>"Ad Restore successfully"]);
        }
        else{
            return \response()->json(['status_code'=>404,'data'=>[],'message'=>"Sorry, No Ads are Found"]);
        }
    }

    public function deleteAd($id){
          $ad=Ad::onlyTrashed()->where('id', $id)->first();
        if($ad!=null){
            $ad->forceDelete();
            return \response()->json(['status_code'=>200,'data'=>[],'message'=>"Ad deleted successfully"]);
        }
        else{
            return \response()->json(['status_code'=>404,'data'=>[],'message'=>"Sorry, No Ads are Found"]);
        }
    }

}
