<?php

namespace App\Http\Controllers\API;

use App\Models\Ad;
use Carbon\Carbon;
use App\Models\News;
use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\CarDetail;

use App\Models\UserDetail;
use Illuminate\Http\Request;

use App\Http\Resources\AdResource;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Http\Resources\EventResource;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public function eventSearch(Request $request){
    //    $validator=Validator::make($request->all(),[
    //        'name'=>'required'
    //    ]);
    //    if($validator->fails()){
    //      return \response()->json(['status_code'=>200,'message'=>$validator->messages()]);
    //    }
       $name = $request->input('name');

       $event=Event::where('name', 'LIKE', '%' . $name . '%')->get();
       if($event->count() > 0){
       return \response()->json(['status_code'=>200,'data'=>EventResource::collection($event)->paginate(4),'message'=>"event list"]);
       }
       return \response()->json(['status_code'=>404,'data'=>[],'message'=>"Sorry, No Events are Found against your search"]);
    }

    public function newsSearch(Request $request){
        // $validator=Validator::make($request->all(),[
        //     'name'=>'required'
        // ]);
        // if($validator->fails()){
        //  return \response()->json(['status_code'=>200,'message'=>$validator->messages()]);
        // }
        $name = $request->input('name');

        $news=News::where('name', 'LIKE', '%' . $name . '%')->get();
        
       if($news->count() > 0){
        return \response()->json(['status_code'=>200,'data'=>NewsResource::collection($news)->paginate(4),'message'=>"news list"]);
       }
        return \response()->json(['status_code'=>404,'data'=>[],'message'=>"Sorry, No News are Found against your search"]);
    }



    public function SearchByCategory($slug){


        $ad_category_id= Category::where('slug', $slug)->pluck('id')->first();

        if($ad_category_id == null ){

        return \response()->json(['status_code'=>404,'data'=>'', 'message'=>"Sorry, No Ads are Found"]);

        }


        $ads= Ad::where('category_id',$ad_category_id)->where('status', 1)->get();

        if($ads->count() > 0){
        return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'message'=>"Ads Available"]);
        }

        return \response()->json(['status_code'=>404,'data'=>"",'message'=>"Sorry, No Ads are Found"]);


    }

    public function advanceSearch(Request $request){
     
    // $validator=Validator::make($request->all(),[
    //     'name'=>'required',
    // ]);
    // if($validator->fails()){
    // return \response()->json(['status_code'=>400,'message'=>$validator->messages()]);
    // }

        $ad_ids=CarDetail::where('condition', 'LIKE', '%' .$request->condition .'%')
        ->where('registeration_city', 'LIKE', '%' . $request->registeration_city . '%')
        ->where('car_model', 'LIKE', '%' . $request->car_model . '%')
        ->where('car_color', 'LIKE', '%' . $request->car_color . '%')
        ->where('company', 'LIKE', '%' . $request->make . '%')
        ->where('engine', 'LIKE', '%'.$request->engine)
        ->where('transmission', 'LIKE', '%' . $request->transmission . '%')
        ->where('fuel_type', 'LIKE', '%' . $request->fuel_type . '%')
        ->pluck('ad_id');

        $ads=Ad::where('name', 'LIKE', '%' . $request->name . '%')
        ->where('available_city', 'LIKE', '%' . $request->available_city . '%')
       ->whereBetween('price', [$request->from, $request->to])
        ->whereIn('id',$ad_ids)
        ->where('status','1')->get();

        $purchase_ids=Purchase::where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
        if($purchase_ids->count() > 0){
            $featured_id=DB::table('featured_ad')->WhereIn('purchase_id',$purchase_ids)->pluck('ad_id');
        //  return response()->json(['purchase_ids'=>$purchase_ids,"featured_id"=>$featured_id]);
        }
        $featured_id = array_map('intval', json_decode($featured_id, true));
        $wishlist = [];
        if(auth('api')->user()!=null){
            $wishlist = DB::table('wish_lists')->where('user_id',auth('api')->user()->id)->get();
        }
        if($ads->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),
            'wishlist'=>$wishlist,'featured'=>$featured_id,'message'=>"Ads Available"]);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>"Sorry, No Ads are Found"]);
    }
    public function getadvanceSearch(Request $request){
            if($request->engine!=null){
                $ad_ids=CarDetail::where('condition', 'LIKE', '%' .$request->condition .'%')
                ->where('registeration_city', 'LIKE', '%' . $request->registeration_city . '%')
                ->where('car_model', 'LIKE', '%' . $request->car_model . '%')
                ->where('car_color', 'LIKE', '%' . $request->car_color . '%')
                ->where('company', 'LIKE', '%' . $request->make . '%')
                ->where('engine',$request->engine)
                ->where('transmission', 'LIKE', '%' . $request->transmission . '%')
                ->where('fuel_type', 'LIKE', '%' . $request->fuel_type . '%')
                ->pluck('ad_id');
          
            }
            $ad_ids=CarDetail::where('condition', 'LIKE', '%' .$request->condition .'%')
            ->where('registeration_city', 'LIKE', '%' . $request->registeration_city . '%')
            ->where('car_model', 'LIKE', '%' . $request->car_model . '%')
            ->where('car_color', 'LIKE', '%' . $request->car_color . '%')
            ->where('company', 'LIKE', '%' . $request->make . '%')
            ->where('transmission', 'LIKE', '%' . $request->transmission . '%')
            ->where('fuel_type', 'LIKE', '%' . $request->fuel_type . '%')
            ->pluck('ad_id');
    
            $ads=Ad::where('name', 'LIKE', '%' . $request->name . '%')
            ->where('available_city', 'LIKE', '%' . $request->available_city . '%')
            ->whereBetween('price', [$request->from, $request->to])
            ->whereIn('id',$ad_ids)
            ->where('status','1')->get();
    
            $purchase_ids=Purchase::where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
            if($purchase_ids->count() > 0){
                $featured_id=DB::table('featured_ad')->WhereIn('purchase_id',$purchase_ids)->pluck('ad_id');
            //  return response()->json(['purchase_ids'=>$purchase_ids,"featured_id"=>$featured_id]);
            }
            $featured_id = array_map('intval', json_decode($featured_id, true));
            $wishlist = [];
            if(auth('api')->user()!=null){
                $wishlist = DB::table('wish_lists')->where('user_id',auth('api')->user()->id)->get();
            }
            if($ads->count() > 0){
                return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),
                'wishlist'=>$wishlist,'featured'=>$featured_id,'message'=>"Ads Available"]);
            }
            return \response()->json(['status_code'=>404,'data'=>'','message'=>"Sorry, No Ads are Found"]);
        }
    public function conditionSearch($condition){
     
        $ad_ids=CarDetail::where('condition', $condition) ->pluck('ad_id');
       
        $ads=Ad::whereIn('id',$ad_ids)->where('status','1')->orderBy('updated_at','desc')->get();
    
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
        if($ads->count() > 0){
        return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'wishlist'=>$wishlist,'featured'=>$featured_id,'message'=>"Ads Available"]);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>"Sorry, No Ads are Found"]);
    }
    

    public function searchDealers(Request $request){
       
        $user = [];
       
        if($request->name!=null){
            $user_ids= UserDetail::where('dealing_name','LIKE', '%' . $request->name . '%')->pluck("user_id");
           if($user_ids->count() > 0){
            $user = User::where('is_dealer',1)->whereIn('id',$user_ids)->with('userDetail')->with("reviews")->paginate(7);
           }
        }
      
        if($request->city!=null){
         
            // $user = UserDetail::where('city',$request->city)->with('user')->with("reviews")->get()->paginate(7);
            $user_ids = UserDetail::where('city',$request->city)->pluck("user_id");
            if($user_ids->count() >0 ){
                $user = User::whereIn('id',$user_ids)->where('is_dealer',1)->with('userDetail')->with("reviews")->get()->paginate(7);
            }
           
           
        }

        // $user = User::where("is_dealer",1)->with("userDetail")->with("reviews")->get()->paginate(7);
     
        if($user!=null){
            return response()->json(['status_code'=>200,'data'=>$user,'message'=>'dealer data']);
        }
        return response()->json(['status_code'=>404,'data'=>[],'message'=>'Sorry, No Dealer are Found']);

    }

    public function exploreCars(Request $request){
        
        // if($request->make!=null){
        //     $ad_ids=CarDetail::Where('company', $request->make)
        //         ->pluck('ad_id');
           
        //     $ads=Ad::whereIn('id',$ad_ids)
        //         ->where('status',1)->get();
        //     if($ads->count() > 0){
        //         return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(10),'message'=>"ad list"]);
        //     }else{
        //         return response()->json(['status_code'=>404,'data'=>null,'message'=>'Sorry, No Ad are Found']); 
        //     }
        // }
        // else{
    
             if($request->trusted_dealer!=null){
                $user=UserDetail::where('dealing_name',$request->trusted_dealer)->first();
             }
             if($request->from_year!=null && $request->to_year!=null){
               
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
                ->whereBetween('year', [$request->from_year, $request->to_year])
                ->where('milage', 'LIKE', '%' .$request->milage.'%')
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }elseif($request->milage_from !=null && $request->milage_to !=null){
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
                ->whereBetween('milage',[$request->milage_from, $request->milage_to])
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }
             elseif($request->engine_from !=null && $request->engine_to  !=null){
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }
            
             else{
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
              
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }
           
            if($request->trusted_dealer!=null){
              $ads=Ad::where('user_id',$user->user_id)->where('status','1')->get();
            }elseif($request->from !=null && $request->to  !=null){
                $ads=Ad::whereIn('id',$ad_ids)
                ->where('name', 'LIKE', '%'.$request->name.'%')
                ->where('available_city', 'LIKE', '%'.$request->available_city.'%')
                ->whereBetween('price', [$request->from, $request->to])
                ->where('status','1')->get();
            }else{
                $ads=Ad::whereIn('id',$ad_ids)
                ->where('name', 'LIKE', '%'.$request->name.'%')
                ->where('available_city', 'LIKE', '%'.$request->available_city.'%')
              
                ->where('status','1')->get();
            }
            
            if($ads->count() > 0){
           
                return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'message'=>"ad list"]);
            }
        
           return \response()->json(['status_code'=>404,'data'=>'','message'=>"Sorry, No Ads are Found"]);
    }
    public function getexploreCars(Request $request){
        
        // if($request->make!=null){
        //     $ad_ids=CarDetail::Where('company', $request->make)
        //         ->pluck('ad_id');
           
        //     $ads=Ad::whereIn('id',$ad_ids)
        //         ->where('status',1)->get();
        //     if($ads->count() > 0){
        //         return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(10),'message'=>"ad list"]);
        //     }else{
        //         return response()->json(['status_code'=>404,'data'=>null,'message'=>'Sorry, No Ad are Found']); 
        //     }
        // }
        // else{
    
             if($request->trusted_dealer!=null){
                $user=UserDetail::where('dealing_name',$request->trusted_dealer)->first();
             }
             if($request->from_year!=null && $request->to_year!=null){
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
                ->whereBetween('year', [$request->from_year, $request->to_year])
                ->where('milage', 'LIKE', '%' .$request->milage.'%')
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }elseif($request->milage_from !=null && $request->milage_to !=null){
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
                ->whereBetween('milage',[$request->milage_from, $request->milage_to])
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }
             elseif($request->engine_from !=null && $request->engine_to  !=null){
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }
             else{
                $ad_ids=CarDetail::where('company', 'LIKE','%'.$request->make.'%')
                ->where('car_model', 'LIKE', '%'.$request->car_model.'%')
              
                ->where('car_color', 'LIKE', '%'.$request->car_color.'%')
                ->where('transmission', 'LIKE', '%'.$request->transmission.'%')
                ->where('engine', 'LIKE', '%' . $request->engine . '%')
                ->where('registeration_city', 'LIKE', '%' .$request->car_reg_city.'%')
                ->pluck('ad_id');
             }
           
            if($request->trusted_dealer!=null){
              $ads=Ad::where('user_id',$user->user_id)->where('status','1')->get();
            }elseif($request->from !=null && $request->to  !=null){
                $ads=Ad::whereIn('id',$ad_ids)
                ->where('name', 'LIKE', '%'.$request->name.'%')
                ->where('available_city', 'LIKE', '%'.$request->available_city.'%')
                ->whereBetween('price', [$request->from, $request->to])
                ->where('status','1')->get();
            }
            else{
                $ads=Ad::whereIn('id',$ad_ids)
                ->where('name', 'LIKE', '%'.$request->name.'%')
                ->where('available_city', 'LIKE', '%'.$request->available_city.'%')
                ->where('status','1')->get();
            }
            
            if($ads->count() > 0){
           
                return \response()->json(['status_code'=>200,'data'=>AdResource::collection($ads)->paginate(7),'message'=>"ad list"]);
            }
        
           return \response()->json(['status_code'=>404,'data'=>'','message'=>"Sorry, No Ads are Found"]);
    }
}
