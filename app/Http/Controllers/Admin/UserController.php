<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Mail\AccountDeactivate;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::where('role_id', 'cs')->where('is_dealer','0')->with('userDetail')->paginate(10);
     
        return view('admin.users.index')->with('users',$users);
    }
    
    public function statusUpdate($id){
        $user=User::find($id);
        if($user->status=='1'){
            $user->status='0';
            $user->save();


            Mail::to($user->email)->send(new AccountDeactivate([
                "email" => "no-reply@autotradia.com",
                "subject" => "Sorry, Your Account has been deactivated!",
                "user_name" => $user->name,
                
            ]));


            toastr()->success("user is deactivated successfully");
            return back();
        }else{
            $user->status='1';
            $user->save();
            toastr()->success("user is activated  successfully");
            return back();
        }
    }

    public function profileUpdate(){
        return view('admin.settings.userProfile.profile');
    }

    public function profileUpdated(Request $request){
        $user=User::where('id',auth()->user()->id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        toastr()->success("user profile is updated  successfully");
        return back();
    }
    public function detailUpdate(Request $request){
        $userdetail=UserDetail::where('user_id',auth()->user()->id)->first();
        if($userdetail==null){
         $userdetail=new UserDetail();
        }
        if($request->has('avatar')){
          
            $avatar=$request->avatar;
            $avatar_new_name=$avatar->getClientOriginalName();
            $avatar->move('images/users',$avatar_new_name);
            $userdetail->avatar=$avatar_new_name;
        }
       
        $userdetail->address=$request->address;
        $userdetail->user_id=auth()->user()->id;
        $userdetail->dealing_name=$request->dealing_name;
        $userdetail->city=$request->city;
        $userdetail->state=$request->state;
        $userdetail->gender=$request->gender;
        $userdetail->dob=$request->dob;
        $userdetail->country=$request->country;
        $userdetail->phone=$request->phone;
        $userdetail->zip=$request->zip;
        $userdetail->save();
        toastr()->success("user profile is updated  successfully");
        return back();
    }

    public function passwordUpdate(Request $request){
       
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();

        } 
        else {
        $user = User::find(Auth::user()->id);

        if (\Hash::check($request->current_password, $user->password)){

            $user->password= Hash::make($request->password);
            //$user->confirm_password = Hash::make($request->password);
             if($user->save()){
                toastr()->success('Profile Updated Successfully');
                return back();
            }else{
                toastr()->error('Something Went Wrong');
                return redirect()->back();
            }
        }
        else{
            toastr()->warning('Current Password Doesnt matched');

            return redirect()->back();

           
        }
     }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::where('id',$id)->with('userDetail')->first();
        return view('admin.users.view')->with('user',$user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
    }
}
