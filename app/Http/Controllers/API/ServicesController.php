<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\HireCar;
use App\Models\CarFeature;
use App\Models\ImportACar;
use App\Models\WashService;
use Illuminate\Http\Request;
use App\Mail\ServiceRequested;
use App\Models\InstantSellCar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CarFeatureResource;
use App\Notifications\NewUserNotification;

class ServicesController extends Controller
{
    //instant sell car

    public function instantSellCar(Request $request){


        $validator=Validator::make($request->all(),[
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'full_address'=>'required',
            'car_name'=>'required',
            'car_model'=>'required',
            // 'car_year'=>'required',
            'car_color'=>'required',
            'price'=>'required',
            'condition'=>'required',
            'registeration_city'=>'required',
            'featured_image'=>'required|file',
            'descriptions' => 'string|max:200'
        ]);
        if($validator->fails()){
            return \response()->json(['message'=>'Missing Fields','data'=>$validator->messages(),'status_code'=>400]);
        }else{
            $instantsell=New InstantSellCar();
            if($request->has('featured_image')){
                $featured_image=$request->featured_image;
                $featured_image_new_name=$featured_image->getClientOriginalName();
                $featured_image->move('images/instant_sell',$featured_image_new_name);
                $instantsell->featured_image=$featured_image_new_name;
            }
            $instantsell->fullname=$request->fullname;
            $instantsell->email=$request->email;
            $instantsell->phone=$request->phone;
            $instantsell->zip=$request->zip;
            $instantsell->state=$request->state;
            $instantsell->city=$request->city;
            $instantsell->full_address=$request->full_address;
            $instantsell->car_name=$request->car_name;
            $instantsell->car_model=$request->car_model;
            // $instantsell->car_year=$request->car_year;
            $instantsell->car_color=$request->car_color;
            $instantsell->price=$request->price;
            $instantsell->condition=$request->condition;
            $instantsell->descriptions=$request->descriptions;
            $instantsell->registeration_no=$request->registeration_no;
            $instantsell->registeration_city=$request->registeration_city;
            $instantsell->save();
             foreach($request->features as $feature){
                $instantsell->instantcarFeatures()->attach($instantsell->id,[
                    'car_feature_id'=>$feature
                    ]);
             }



             
            $details = [
                'user_name' => $request->name,
                'user_email' => $request->email,
                'created_at' => $instantsell->created_at,
                'message'=> 'Hello Admin!! New Instant Car Sell Request Arrived'
            ];

            $user= User::where('role_id','a')->first();


    
            $user->notify(new \App\Notifications\NewUserNotification($details));



             Mail::to($request->email)->send(new ServiceRequested([
                "email" => "no-reply@autotradia.com",
                "subject" => "Thank You! Your Request has been Received!",
                "user_name" => $request->fullname,
                'service_name' => 'Instant Car Sell || Car User Phone: '.$request->phone .' || Car Owner Email : '.$request->email,
                'submit_date' => $instantsell->created_at,
            ]));




            return \response()->json(['status_code'=>200,'data'=>$instantsell,'message'=>"Your data are saved"]);

        }
    }

    public function hireCar(Request $request){

        $validator=Validator::make($request->all(),[
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'full_address'=>'required',
            'pickup_location'=>'required',
            'pickup_time'=>'required',
            'pickup_date'=>'required',
            'expected_budget'=>'required',
            'days'=>'required',
            'additional_notes' => 'string|max:200'
        ]);
        if($validator->fails()){
            return \response()->json(['message'=>'Missing Fields','data'=>$validator->messages(),'status_code'=>400]);
        }else{
            $hirecar=New HireCar();

            $hirecar->fullname=$request->fullname;
            $hirecar->email=$request->email;
            $hirecar->phone=$request->phone;
            // $hirecar->zip=$request->zip;
            $hirecar->state=$request->state;
            $hirecar->city=$request->city;
            $hirecar->full_address=$request->full_address;
           
            $hirecar->pickup_location=$request->pickup_location;
            $hirecar->dropoff_location=$request->dropoff_location;
            $hirecar->pickup_time=$request->pickup_time;
            $hirecar->pickup_date=$request->pickup_date;
            $hirecar->expected_budget=$request->expected_budget;
            $hirecar->days=$request->days;
            $hirecar->car_model=$request->car_model;
            $hirecar->car_requested=$request->car_requested;
            $hirecar->additional_notes=$request->additional_notes;
            $hirecar->save();


            $details = [
                'user_name' => $request->name,
                'user_email' => $request->email,
                'created_at' => $hirecar->created_at,
                'message'=> 'Hello Admin!! New Car Hire Request Arrived'
            ];

            $user= User::where('role_id','a')->first();


    
            $user->notify(new \App\Notifications\NewUserNotification($details));




            Mail::to($request->email)->send(new ServiceRequested([
                "email" => "no-reply@autotradia.com",
                "subject" => "Thank You! Your Request has been Received!",
                "user_name" => $request->fullname,
                'service_name' => 'Car Hire Service || Request User Phone: '.$request->phone .' || Request User Email : '.$request->email,
                'submit_date' => $hirecar->created_at,
            ]));


            return \response()->json(['status_code'=>200,'data'=>$hirecar,'message'=>"Your data are saved"]);

        }
    }
    public function washService(Request $request){

        $validator=Validator::make($request->all(),[
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'full_address'=>'required',
            'car_name'=>'required',
            'type'=>'required',
            // 'car_color'=>'required',
            'booking_date'=>'required',
            'booking_time'=>'required',
            'additional_notes' => 'string|max:200'
        ]);
        if($validator->fails()){
            return \response()->json(['message'=>'Missing Fields','data'=>$validator->messages(),'status_code'=>400]);
        }else{
            $washservice=New WashService();

            $washservice->fullname=$request->fullname;
            $washservice->email=$request->email;
            $washservice->phone=$request->phone;
            // $washservice->zip=$request->zip;
            $washservice->state=$request->state;
            $washservice->city=$request->city;
            $washservice->full_address=$request->full_address;
            $washservice->car_name=$request->car_name;
            $washservice->car_model=$request->car_model;
            $washservice->type=$request->type;
            $washservice->booking_date=$request->booking_date;
            $washservice->booking_time=$request->booking_time;
            $washservice->additional_notes=$request->additional_notes;
            $washservice->save();



            $details = [
                'user_name' => $request->name,
                'user_email' => $request->email,
                'created_at' => $washservice->created_at,
                'message'=> 'Hello Admin!! New Wash Car Request Arrived'
            ];

            $user= User::where('role_id','a')->first();


    
            $user->notify(new \App\Notifications\NewUserNotification($details));


            Mail::to($request->email)->send(new ServiceRequested([
                "email" => "no-reply@autotradia.com",
                "subject" => "Thank You! Your Request has been Received!",
                "user_name" => $request->fullname,
                'service_name' => 'Car Wash Service || Request User Phone: '.$request->phone .' || Request User Email : '.$request->email,
                'submit_date' => $washservice->created_at,
            ]));



            return \response()->json(['status_code'=>200,'data'=>$washservice,'message'=>"Your data are saved"]);

        }
    }

    public function importCar(Request $request){

        $validator=Validator::make($request->all(),[
            'fullname'=>'required',
            // 'country'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'car_name'=>'required',
            'car_model'=>'required',
            // 'car_year'=>'required',
            'car_color'=>'required',
            // 'company'=>'required',
            'preferred_country'=>'required',
            'condition'=>'required',
            'expected_budget'=>'required',
            'additional_notes' => 'string|max:200'
        ]);
        if($validator->fails()){
            return \response()->json(['message'=>'Missing Fields','data'=>$validator->messages(),'status_code'=>400]);
        }else{
            $importaCar=New ImportACar();

            $importaCar->fullname=$request->fullname;
            // $importaCar->country=$request->country;
            $importaCar->email=$request->email;
            $importaCar->phone=$request->phone;
            $importaCar->state=$request->state;
            $importaCar->city=$request->city;
            $importaCar->car_name=$request->car_name;
            $importaCar->car_model=$request->car_model;
            // $importaCar->car_year=$request->car_year;
            $importaCar->car_color=$request->car_color;
            // $importaCar->company=$request->company;
            $importaCar->preferred_country=$request->preferred_country;
            $importaCar->condition=$request->condition;
            $importaCar->expected_budget=$request->expected_budget;
            $importaCar->expected_date=$request->expected_date;
            $importaCar->additional_notes=$request->additional_notes;
            $importaCar->save();



            $details = [
                'user_name' => $request->name,
                'user_email' => $request->email,
                'created_at' => $importaCar->created_at,
                'message'=> 'Hello Admin!! New Import A Car Request Arrived'
            ];

            $user= User::where('role_id','a')->first();


    
            $user->notify(new \App\Notifications\NewUserNotification($details));

            
            

            Mail::to($request->email)->send(new ServiceRequested([
                "email" => "no-reply@autotradia.com",
                "subject" => "Thank You! Your Request has been Received!",
                "user_name" => $request->fullname,
                'service_name' => 'Car Import Service || Request User Phone: '.$request->phone .' || Request User Email : '.$request->email,
                'submit_date' => $importaCar->created_at,
            ]));




            return \response()->json(['status_code'=>200,'data'=>$importaCar,'message'=>"Your data are saved"]);

        }
    }
    public function carFeatures(){
        $carfeatures=CarFeature::all();
        if($carfeatures->count() > 0){
            return response()->json(['status_code'=>200,'data'=>CarFeatureResource::collection($carfeatures),'message'=>'Car Features']);
        }
        return response()->json(['status_code'=>404,'data'=>'','message'=>'No Car Features are found']);
    }


}
