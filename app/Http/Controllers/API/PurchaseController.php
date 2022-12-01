<?php

namespace App\Http\Controllers\API;

use App\Models\Ad;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use App\Mail\AdFeatured;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Mail\PackagePurchase;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\PurchaseResource;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;

class PurchaseController extends Controller
{
    public function purchaseStore(Request $request){

        $package=Package::where('id',$request->package_id)->where('status','1')->first();
        $id= mt_rand(000001, 999999);
        if($package!=null){
            $purchase=new Purchase();
            $purchase->id=$id;
            $purchase->user_id=auth('api')->user()->id;
            $purchase->package_id=$request->package_id;
            $purchase->transaction_id=null;
            $purchase->expiry_date=Carbon::now()->addDays($package->durations)->format('Y-m-d h:i:s');
            $purchase->save();


                $details = [
                'user_name' => auth('api')->user()->name,
                'user_email' =>  auth('api')->user()->email,
                'created_at' => date('d-m-yy H:i:s',strtotime($purchase->created_at)),
                'message'=> "Congrats!! A Package : ".$package->name. "  has been Purchased"
                ];

                 $admin_user= User::where('role_id','a')->first();


                $admin_user->notify(new \App\Notifications\NewUserNotification($details));


                $user_details = [
                    'user_name' => auth('api')->user()->name,
                    'user_email' =>  auth('api')->user()->email,
                    'created_at' =>  date('d-m-yy H:i:s',strtotime($purchase->created_at)),
                    'message' => "Hi ".auth('api')->user()->name.", you have successfully purchased the package : ".$package->name,

                ];
                auth('api')->user()->notify(new \App\Notifications\NewUserNotification($user_details));



            Mail::to(auth('api')->user()->email)->send(new PackagePurchase([
                "email" => "no-reply@autotradia.com",
                "subject" => "Congrats on your purchase on Auto Tradia!",
                "user_name" => auth('api')->user()->name,
                "expiry_date" => $purchase->expiry_date,
                'purchase_date' => $purchase->created_at,
                'package_name' => $package->name,
                "package_price"=> $package->price,
            ]));
            return \response()->json(['status_code'=>200,'data'=>$purchase,'message'=>'Package Purchased Successfully']);
        }else{
            return \response()->json(['status_code'=>404,'message'=>'Sorry, No Package are Found']);
        }
    }

    public function myActivePurchases(){
        $purchases=PurchaseResource::collection(Purchase::where('user_id',auth('api')->user()->id)->where('status',1)->orderBy('created_at','desc')->get());
        if($purchases->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>$purchases,'messag'=>'My purhcase history']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'You have not purchased any package yet!']);
    }

    public function myPurchases(){
        $purchases=PurchaseResource::collection(Purchase::where('user_id',auth('api')->user()->id)->orderBy('created_at','desc')->get());
        if($purchases->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>$purchases,'messag'=>'My purhcase history']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'You have not purchased any package yet!']);
    }

    public function featuredAd(Request $request){
        $validator=Validator::make($request->all(),[
            'ad_id'=>'required',
            'package_id'=>'required',
        ]);
        if($validator->fails()){
            return \response()->json(['data'=>$validator->messages(),'status_code'=>400]);
        }
        $package=Package::where('id',$request->package_id)->first();
        $purchase=Purchase::where('package_id',$request->package_id)->where('user_id',auth('api')->user()->id)->first();
        if($purchase!=null){
            $purchases=Purchase::where('package_id',$request->package_id)->where('user_id',auth('api')->user()->id)->where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->where('ad_used','<',$purchase->package->max_ads)->first();

            $ad_title= Ad::where('id',$request->ad_id)->pluck('name')->first();

            if($purchases!=null){
                $featured_ad=DB::table('featured_ad')->where('purchase_id',$purchases->id)->where('ad_id',$request->ad_id)->first();
                if($featured_ad==null){
                    $purchases->featuredAds()->attach($purchases->id,[
                        'ad_id'=>$request->ad_id,
                        'created_at'=> Carbon::now(),
                    ]);

                    $purchases->ad_used+=1;
                  
                    $purchases->save();
                   

                    $details = [
                        'user_name' => auth('api')->user()->name,
                        'user_email' =>  auth('api')->user()->email,
                        'created_at' => date('d-m-yy H:i:s',strtotime($purchases->created_at)),
                        'message'=> "Congrats!! An Ad : ".$ad_title. " has now Featured"
                        ];

                         $admin_user= User::where('role_id','a')->first();
                        $admin_user->notify(new \App\Notifications\NewUserNotification($details));


                        $user_details = [
                            'user_name' => auth('api')->user()->name,
                            'user_email' =>  auth('api')->user()->email,
                            'created_at' => date('d-m-yy H:i:s',strtotime($purchases->created_at)),
                            'message' => "Hi ".auth('api')->user()->name.", you have successfully featured your ad named : ".$ad_title,

                        ];

                        auth('api')->user()->notify(new \App\Notifications\NewUserNotification($user_details));


                    Mail::to(auth('api')->user()->email)->send(new AdFeatured([
                        "email" => "no-reply@autotradia.com",
                        "subject" => "Awesome! Your Ad has been Featured now on Auto Tradia!",
                        "user_name" => auth('api')->user()->name,
                        "expiry_date" => $purchase->expiry_date,
                        'featured_date' => Carbon::now(),
                        'ad_name' => $ad_title,
                    ]));

                 return response()->json(['status_code'=>200,'data'=>'','message'=>'Your ad is featured Now']);
                }
                return response()->json(['status_code'=>409,'data'=>'','message'=>'Ad is already featured']);
            }else{
                return response()->json(['status_code'=>404,'data'=>'','message'=>'Your package limit is reached']);
            }
        }

        return \response()->json(['status_code'=>404,'data'=>'','message'=>'You have not purchase any package yet!']);
        }
    }
