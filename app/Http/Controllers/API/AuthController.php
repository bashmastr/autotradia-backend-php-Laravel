<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\Welcome;
use App\Models\WishList;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $password=$request->password;

        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if($validator->fails()){
            return response()->json(['status_code' => 409,'data'=>$validator->messages()]);
        }else{
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();
        $user->assignRole('customer');
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        $token->save();

        $details = [
            'user_name' => $request->name,
            'user_email' => $request->email,
            'created_at' => date('d-m-yy H:i:s',strtotime($user->created_at)),
            'user_id' => $user->id,
            'message'=> 'Congrats!! New User Register'
        ];

        $admin_user= User::where('role_id','a')->first();
        $admin_user->notify(new \App\Notifications\NewUserNotification($details));



        $user_details = [
            'user_name' =>$request->name,
            'user_email' =>  $request->email,
            'created_at' => date('d-m-yy H:i:s',strtotime($user->created_at)),
            'message' => "Hi ".$request->name.", Welcome to Auto Tradia. Thank you for showing your interest in our platform",
            
            ];
        $user->notify(new \App\Notifications\NewUserNotification($user_details));

        Mail::to($user->email)->send(new Welcome([
            "from" => "no-reply@autotradia.com",
            "subject" => "Welcome To Auto Tradia",
            "user" => $user,
            'password' => $password,
        ]));




        return response()->json(['data'=>$user,
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'message' => 'Successfully created user!',
            'status_code'=>200
        ], 201);
      }
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'password' => ['required', 'string', 'min:8'],
            'remember_me' => 'boolean'
        ]);
        if($validator->fails()){
            return response()->json(['message'=>$validator->messages()]);
        }else{
            $credentials = request(['email', 'password']);
            if(!Auth::attempt($credentials))
                return response()->json([
                    'message' => 'Invalid Password Or Email Address',
                    'status_code'=>401
                ], 401);

            $user =new UserResource(User::where("id",Auth::user()->id)->first());

            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            if ($request->remember_me)

            $token->save();
            return response()->json([
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'user'=> $user,
                'status_code'=>200
            ]);
        }
    }

    public function profile_update(Request $request){
        // if($request->password!=null){
        //     $validator = Validator::make($request->all(), [
        //         'current_password' => 'required',
        //         'password' => 'required'
        //     ]);
        //     if ($validator->fails()) {
        //      return response()->json(['message'=>$validator->messages()]);
        //     }
        // }
        $user = User::find(Auth::user()->id);
        if($request->password!=null){

            if(\Hash::check($request->current_password, $user->password)){
                $user->password = Hash::make($request->password);
            }else{
                return response()->json(['status_code'=>400,'message'=>'Current Password Does Not Match, Leave it Empty if you dont want to change it']);
            }
            // $check = User::where('password',$user->password);
            // if($check !== null){

            // }
        }
        $user_detail = UserDetail::WHERE("user_id",Auth::user()->id)->first();
        $image_new_name = '';

        if($request->hasFile('avatar')){
            $image= $request->avatar;
            $image_new_name= $image->getClientOriginalName();
            $image->move('images/users', $image_new_name);
            if($user_detail !== null){
                $oldpath= 'images/users'.$user_detail->avatar;
                @unlink($oldpath);
                $user_detail->avatar= $image_new_name;
            }
        }

        $user->name= $request->name;
      
        $user->email= $request->email;
        if($user->userDetail === null){
            UserDetail::create([
                "user_id" => Auth::user()->id,
                "avatar" => $image_new_name,
                "gender" => $request->gender,
                "address" => $request->address,
                "city" => $request->city,
                "dob" => $request->dob,
                "dealing_name" => $request->dealing_name,
                "phone" => $request->phone,
            ]);
            return response()->json(['status_code'=>200,'message'=>'Profile Updated Successfully']);
        }else{
            $user_detail->gender= $request->gender;
            $user_detail->dob= $request->dob;
            $user_detail->address= $request->address;
            $user_detail->city= $request->city;
            $user_detail->dealing_name= $request->dealing_name;
            $user_detail->phone= $request->phone;

            if($user_detail->save() && $user->save()){
                return response()->json(['status_code'=>200,'data'=> [
                    "name" => $request->name,
                    "email" => $request->email,
                    "avatar" => $image_new_name,
                    "gender" => $request->gender,
                    "address" => $request->address,
                    "city" => $request->city,
                    "dob" => $request->dob,
                    "dealing_name" => $request->dealing_name,
                    "phone" => $request->phone,
                ],'message'=>'Profile Updated Successfully']);
            }else{
                return response()->json(['status_code'=>500,'data'=>$user,'message'=>'Something Went Wrong']);
            }
        }
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out',
            'status_code'=>200
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
       
        $count = WishList::where('user_id',auth('api')->user()->id)->count();
        $user = User::WHERE("id",Auth::user()->id)->with("userDetail")->with('wishlists')->first();

        return response()->json(['wishlist'=>$count,'data'=> $user, 'status_code'=>200]);
    }
}
