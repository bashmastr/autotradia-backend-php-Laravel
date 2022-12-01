<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;

class ReviewController extends Controller
{
    public function storeReview(Request $request){
     $validator=Validator::make($request->all(),[
      'dealer_id'=>'required',
      'stars'=>'required',
     ]);
     if($validator->fails()){
         return \response()->json(['status_code'=>400,'message'=>$validator->messages()]);
     }
     if(auth('api')->user()!=null){
      $checkreview=Review::where('user_id',\auth('api')->user()->id)->where('dealer_id',$request->dealer_id)->first();
     
       if($checkreview==null){
        $review=new Review();
        $review->dealer_id =$request->dealer_id ;
        $review->user_id=auth('api')->user()->id;
        $review->stars=$request->stars;
        $review->comments=$request->comments;
        $review->save();



                     
        $details = [
            'user_name' => auth('api')->user()->name,
            'user_email' =>  auth('api')->user()->email,
            'created_at' => $newscomment->created_at,
            'message'=> 'Hi Admin!! New Review Posted On Dealer'
            ];

        $user= User::where('role_id','a')->first();

        $user->notify(new \App\Notifications\NewUserNotification($details));


        
         return \response(['status_code'=>200,'data'=>$review,'message'=>'Your Review has been placed']);
       }else{
        return response()->json([
            'message' => 'Already you give the reviews on this Dealer',
            'status_code'=>409
        ], 409);  
       }
     }
     else{
        return response()->json([
            'message' => 'Unauthorized',
            'status_code'=>401
        ], 401);
     }
    }

    public function userReviews(){
        if(auth('api')->user()!=null){
         $userReviews=Review::where('user_id',auth('api')->user()->id)->with('dealer')->paginate(10);
         if($userReviews->count() > 0){
             return \response()->json(['status_code'=>200,'data'=>$userReviews,'message'=>"User reviews list"]);
          }else{
              return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Reviews are Found']);
          }
        }else{
            return response()->json([
                'message' => 'Unauthorized',
                'status_code'=>401
            ], 401);  
        }
    }
    public function dealerReviews(){
        if(auth('api')->user()!=null){
         $userReviews=Review::where('dealer_id',auth('api')->user()->id)->with('user')->paginate(10);
         if($userReviews->count() > 0){
             return \response()->json(['status_code'=>200,'data'=>$userReviews,'message'=>"Dealer reviews list"]);
          }else{
              return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Reviews are Found']);
          }
        }else{
            return response()->json([
                'message' => 'Unauthorized',
                'status_code'=>401
            ], 401);  
        }
    }
}
