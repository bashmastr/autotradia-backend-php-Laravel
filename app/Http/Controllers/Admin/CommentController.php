<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventComment;
use App\Models\NewsComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    
   public function newsComments(){
     
    $newcomments=NewsComment::paginate(10);
    return view('admin.comments.news')->with('newcomments',$newcomments);
    }
    public function eventComments(){
        $eventcomments=EventComment::paginate(10);
        return view('admin.comments.event')->with('eventcomments',$eventcomments);
    }
    public function newsStatus($id){
        $comment=NewsComment::find($id);
        if($comment->status=='1'){
            $comment->status='0';
            $comment->save();

                        
            $user_details = [
                'user_name' => $comment->user->name,
                'user_email' =>  $comment->user->email,
                'created_at' => $comment->updated_at,
                'message' => "Hi ".$comment->user->name.", your recent comment status on news is changed to pending",
                
            ];
    
            $comment->user->notify(new \App\Notifications\NewUserNotification($user_details));


            toastr()->success("comment is deactivated successfully");
            return back();
        }else{
            $comment->status='1';
            $comment->save();

            
            $user_details = [
                'user_name' => $comment->user->name,
                'user_email' =>  $comment->user->email,
                'created_at' => $comment->updated_at,
                'message' => "Hi ".$comment->user->name.", your recent comment on news is now approved",
                
            ];
    
            $comment->user->notify(new \App\Notifications\NewUserNotification($user_details));



            toastr()->success("comment is activated  successfully");
            return back();
        }
    }
    public function eventStatus($id){
        $comment=EventComment::find($id);
        if($comment->status=='1'){
            $comment->status='0';
            $comment->save();

            $user_details = [
                'user_name' => $comment->user->name,
                'user_email' =>  $comment->user->email,
                'created_at' => $comment->updated_at,
                'message' => "Hi ".$comment->user->name.", your recent comment status on news is changed to pending",
                
            ];
    
            $comment->user->notify(new \App\Notifications\NewUserNotification($user_details));


            toastr()->success("comment is deactivated successfully");
            return back();
        }else{
            $comment->status='1';
            $comment->save();

            $user_details = [
                'user_name' => $comment->user->name,
                'user_email' =>  $comment->user->email,
                'created_at' => $comment->updated_at,
                'message' => "Hi ".$comment->user->name.", your recent comment on events is now approved",
                
            ];
    
            $comment->user->notify(new \App\Notifications\NewUserNotification($user_details));



            toastr()->success("comment is activated  successfully");
            return back();
        }
    }
    public function deleteEventComment($id)
    {
       $comment=EventComment::find($id);
       if($comment->count() > 0){
           $comment->delete();

           $user_details = [
            'user_name' => $comment->user->name,
            'user_email' =>  $comment->user->email,
            'created_at' => $comment->updated_at,
            'message' => "Hi ".$comment->user->name.", your recent comment on events is now removed",
            
             ];

            $comment->user->notify(new \App\Notifications\NewUserNotification($user_details));



           toastr()->success("comment deleted successfully");
           return \redirect()->back();
       }
    }
    public function deleteNewsComment($id)
    {
       $comment=NewsComment::find($id);
       if($comment->count() > 0){
           $comment->delete();

           $user_details = [
            'user_name' => $comment->user->name,
            'user_email' =>  $comment->user->email,
            'created_at' => $comment->updated_at,
            'message' => "Hi ".$comment->user->name.", your recent comment on news is now removed",
            
             ];

            $comment->user->notify(new \App\Notifications\NewUserNotification($user_details));



           toastr()->success("comment deleted successfully");
           return \redirect()->back();
       }
    }
}
