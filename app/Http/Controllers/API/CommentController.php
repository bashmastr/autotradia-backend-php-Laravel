<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\NewsComment;
use App\Models\EventComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;
use App\Http\Resources\NewsCommentResource;
use App\Http\Resources\EventCommentResource;
use App\Http\Resources\EventCategoryResource;

class CommentController extends Controller
{
    public function eventCommentStore(Request $request){
       $validator=Validator::make($request->all(),[
       'events_id'=>'required',
       'comment'=>'required|max:150',
       ]);
       if($validator->fails()){
           return \response()->json(['status_code'=>403,'message'=>$validator->messages()]);
       }
       if(auth('api')->user()!=null){

       $eventcomment=new EventComment();
       $eventcomment->user_id=auth('api')->user()->id;
       $eventcomment->event_id=$request->events_id;
       $eventcomment->comment=$request->comment;
       $eventcomment->save();

       $details = [
        'user_name' => auth('api')->user()->name,
        'user_email' =>  auth('api')->user()->email,
        'created_at' => date('d-m-yy H:i:s',strtotime($eventcomment->created_at)),
        'message'=> 'Hi Admin!! New Comment Posted On Event'
        ];

         $admin_user= User::where('role_id','a')->first();
        $admin_user->notify(new \App\Notifications\NewUserNotification($details));


        $user_details = [
            'user_name' => auth('api')->user()->name,
            'user_email' =>  auth('api')->user()->email,
            'created_at' =>  date('d-m-yy H:i:s',strtotime($eventcomment->created_at)),
            'message' => "Hi ".auth('api')->user()->name.", Your recent comment on an event is posted successfully & is in pending",

            ];
        auth('api')->user()->notify(new \App\Notifications\NewUserNotification($user_details));



       return \response()->json(['status_code'=>200,'data'=>$eventcomment,'message'=>'Comment has been store']);
       }else{

        return response()->json([
            'message' => 'Unauthorized',
            'status_code'=>401

        ], 401);
     }
    }
    public function eventComments($id){

      $eventcomments=EventCommentResource::collection(EventComment::where('event_id',$id)->where('status','1')->get());
      if($eventcomments!=null){
          return \response()->json(['status_code'=>200,'data'=>$eventcomments,'message'=>'event comments']);
      }
      return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No Event Comments are Found']);
    }
    public function newsCommentStore(Request $request){
        $validator=Validator::make($request->all(),[
        'news_id'=>'required',
        'comment'=>'required|max:150',
        ]);

        if($validator->fails()){
            return \response()->json(['status_code'=>403,'message'=>$validator->messages()]);
        }
        if(auth('api')->user()!=null){
        $newscomment=new NewsComment();
        $newscomment->user_id=auth('api')->user()->id;
        $newscomment->news_id=$request->news_id;
        $newscomment->comment=$request->comment;
        $newscomment->save();


        $details = [
            'user_name' => auth('api')->user()->name,
            'user_email' =>  auth('api')->user()->email,
            'created_at' => date('d-m-yy H:i:s',strtotime($newscomment->created_at)),
            'message'=> 'Hi Admin!! New Comment Posted On News'
            ];

        $admin_user= User::where('role_id','a')->first();
        $admin_user->notify(new \App\Notifications\NewUserNotification($details));


        $user_details = [
            'user_name' => auth('api')->user()->name,
            'user_email' =>  auth('api')->user()->email,
            'created_at' =>  date('d-m-yy H:i:s',strtotime($newscomment->created_at)),
            'message' => "Hi ".auth('api')->user()->name.", your recent comment on news is posted successfully & is in pending",

            ];

        auth('api')->user()->notify(new \App\Notifications\NewUserNotification($user_details));




        return \response()->json(['status_code'=>200,'data'=>$newscomment,'message'=>'Your Comment will Appear once it has been Approved']);
        }
        else{
            return response()->json([
                'message' => 'Unauthorized',
                'status_code'=>401

            ], 401);
        }
     }
     public function newsComments($id){







    $newscomments=NewsCommentResource::collection(NewsComment::where('news_id',$id)->where('status','1')->get());
    if($newscomments->count() > 0){
        return \response()->json(['status_code'=>200,'data'=>$newscomments,'message'=>'news comments']);
    }
    return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No News Comments are Found']);
    }
}
