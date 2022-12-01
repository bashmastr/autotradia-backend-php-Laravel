<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
      
    use SendsPasswordResetEmails;
    
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response(['message'=> $response,'status_code'=>200]);

    }


    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response(['error'=> $response], 422);

    }

    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new ResetPasswordNotification($token));
    // }

    // public function forgot() {
    //     $credentials = request()->validate(['email' => 'required|email']);

    //     Password::sendResetLink($credentials);

    //     return response()->json(["msg" => 'Reset password link sent on your email id.']);
    // }
}
