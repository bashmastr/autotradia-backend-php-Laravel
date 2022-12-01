<?php

namespace App\Http\Controllers\API;

use App\Mail\Contact;
use App\Models\Package;
use App\Models\LegalPage;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;

class GeneralController extends Controller
{
    public function socialLinks(){
        $links=SocialLink::all();
        if($links!=null){
            return response()->json(['status_code'=>200,'data'=>$links,'message'=>'Social media links']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Social media links']);
    }

    public function privacy(){
        $privacy=LegalPage::where('slug','privacy-policy')->first();
        if($privacy!=null){
            return \response()->json(['status_code'=>200,'data'=>$privacy,'message'=>'Privacy policy']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Privacy policy are not found']);
    }

    public function terms(){
        $terms=LegalPage::where('slug','terms-conditions')->first();
        if($terms!=null){
            return \response()->json(['status_code'=>200,'data'=>$terms,'message'=>'Terms and user page']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Terms page are not found']);
    }

    public function refund(){
        $refund=LegalPage::where('slug','refund-policy')->first();
        if($refund!=null){
            return \response()->json(['status_code'=>200,'data'=>$refund,'message'=>'refund policy']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'refund policy are not found']);
    }

    public function allLegalPages(){
        // $terms=LegalPage::where('slug','terms')->first();
        // $refund=LegalPage::where('slug','refund-policy')->first();
        // $privacy=LegalPage::where('slug','privacy-policy')->first();

        // $arr = [];
        // if($privacy != null){
        //     $arr["privacy"] = $privacy;
        // }
        // if($refund != null){
        //     $arr["refund"] = $refund;
        // }
        // if($terms != null){
        //     $arr["terms"] = $terms;
        // }

        $legal_pages = LegalPage::all();

        return response()->json(['status_code'=>200,'data'=>$legal_pages,'message'=>'all legal pages']);
    }

    public function packages(){
        $packages=Package::where('status','1')->get();
        if($packages!=null){
            return \response()->json(['status_code'=>200,'data'=>$packages,'message'=>'Package list']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'no package are found yet']);
    }

    // Send Email For Contact Us
    public function contact(Request $request){

        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);
        if($validator->fails()){
            return \response()->json(['data'=>$validator->messages(),'status_code'=>400]);
        }
        Mail::to('asadullah@gap-dynamics.com')->send(new Contact([
            "email" => $request->email,
            "name"=> $request->name,
            "subject" => $request->subject,
            "phone" => $request->phone,
            'message' => $request->message,

        ]));
        return \response()->json(['message'=>'message sent succesfully to admin','status_code'=>200]);
    }



    public function description_helpers(){
        $description_helpers = DB::table('description_helpers')->get();
        return response()->json($description_helpers);
    }


    public function notifications(){
        $notifications= DB::table('notifications')->where('read_at', NULL)->where('notifiable_id', auth('api')->user()->id)->get();
        if($notifications->count() > 0){
            return response()->json(['status_code'=>200,'data'=>$notifications,'message'=>'Your Notifications']);
        }
        return response()->json(['status_code'=> 404,'data'=>[],'message'=>"No Notifications are Available"]);
    }



}
