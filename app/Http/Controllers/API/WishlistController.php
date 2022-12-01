<?php

namespace App\Http\Controllers\API;

use App\Models\Ad;
use Carbon\Carbon;
use App\Models\Purchase;
use App\Models\WishList;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\WishlistResource;
use Illuminate\Support\Facades\Validator;

class WishlistController extends Controller
{
    public function store(Request $request){
        // return response()->json($request->all());
        $validated =Validator::make($request->all(),['ad_id'=>'required']);
        if ($validated->fails()) {
            return response()->json(['message'=>$validated->messages()]);
        }else{
            $user = auth('api')->user();

            $checkproduct= Wishlist::where('ad_id',$request->ad_id)->where('user_id',auth('api')->user()->id)->first();
            if($checkproduct==null){
                $wishlist = new Wishlist();
                $wishlist->user_id = $user->id;
                $wishlist->ad_id = $request->ad_id;
                $wishlist->save();
                return response()->json([
                    'message' => 'Ad Added to Wishlist',
                    'status_code' => 200
                ], 200);
            }
            return response()->json([
                'message' => 'Ad is already in the Wishlist',
                'status_code' => 409
            ], 200);
        }
    }
    // $ads=Ad::where('user_id',auth('api')->user()->id)->get();
    // if($ads->count() > 0){
    //     return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(10),'message'=>'seller ads List']);
    // }
    public function view(){

        $user = auth('api')->user();
      
        $purchase_id=DB::table('featured_ad')->pluck('purchase_id');
        if($purchase_id->count() > 0){
            $purchase_ids=Purchase::whereIn('id',$purchase_id)->where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
           if($purchase_ids->count()>0){
            $ad_ids=DB::table('featured_ad')->whereIn('purchase_id',$purchase_ids)->pluck('ad_id');
         
            if($ad_ids->count() >0){
                $featured_id=Ad::whereIn('id',$ad_ids)->where('status','1')->pluck('id');  
            }
             $w_ad_ids=Wishlist::where("user_id",$user->id)->pluck('ad_id');
             if($w_ad_ids){
                 $ads=Ad::whereIn('id',$w_ad_ids)->where('status','1')->get();
             }
          
            if($ads->count() > 0){
                return response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'featured'=>$featured_id,'message'=>'Ads Found in Wishlist']);
            }
           }
        }
        return response()->json(['status_code'=>404,'data'=>[],'featured'=>[],'message'=>'Sorry, No Ads are Found']);
    }

    public function wishlistDelete($id){
        $wishlist=Wishlist::where('ad_id',$id)->first();
        if($wishlist!=null){
            $wishlist->delete();
            return response()->json(['status_code'=>200,'message'=>'Ad Has Been Removed From Wishlist']);
        }else{
            return response()->json(['status_code'=>404,'message'=>'Sorry, No Ads are Found']);
        }
    }
}

