<?php

namespace App\Http\Controllers\API;

use Socialite;

  
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return \response()->json([
        "status_code"=>200,
        "link"=> Socialite::with($provider)->stateless()->redirect()->getTargetUrl(),
        "message"=>"login link"
        ]);
    }

    public function Callback($provider){

        $userSocial = Socialite::driver($provider)->stateless()->user();
        $users =User::where(['email' => $userSocial->getEmail()])->first();
        if($users){
            Auth::login($users);
            $tokenResult = $users->createToken('Personal Access Token');
            $token = $tokenResult->token;

            $token->save();
            // return redirect()->away(config('frontend.url')."/login?token=".$tokenResult->accessToken);
            return Redirect::to(config('frontend.url')."/login?token=".$tokenResult->accessToken);
        }else{

            $user = User::create([
                'name'  => $userSocial->getName(),
                'email'  => $userSocial->getEmail(),
                'image'  => $userSocial->getAvatar(),
                'provider_id' => $userSocial->getId(),
                'provider'  => $provider,
            ]);
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;

            $token->save();
            // return response()->json([
            //     'access_token' => $tokenResult->accessToken,
            //     'token_type' => 'Bearer',
            //     'user'=> $user,
            //     'status_code'=>200
            // ]);
           // return Redirect::to(config('frontend.url')."?=".$tokenResult->accessToken);
            return redirect()->away(config('frontend.url')."?=".$tokenResult->accessToken);
        }

    }
}

// On Success Redirected Back to
// http://127.0.0.1:8001/api/auth/login/google/127.0.0.1:8001?=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTFmNGVmZTQyNTFmYWE5MTA3YzNjNzY4Mzc5YjkxODdhOTM5NmQ4MzY5NjVmYjRmNDRmZjE3OThlZjc0YmE2Zjk4OGRmZGM4ZjlmYzg2ZGUiLCJpYXQiOiIxNjEzOTI2NDA2LjQ3OTEyMiIsIm5iZiI6IjE2MTM5MjY0MDYuNDc5MTI2IiwiZXhwIjoiMTY0NTQ2MjQwNi40MjM5MTciLCJzdWIiOiIxMyIsInNjb3BlcyI6W119.kFMa7ToAr94lLQO77ZhGFeK1T_VVhs4mn0cgHSALAI6IwVznVwX8ZDxdxz29ezKsWhszCi26moHk448CU2QMsXTW-6xt5c38Z9vWR7fGvUi8Mygc0nf68n0rRQBvQD50o1e_Hsn4_ysLEaoCNwbD8--ABmnzRwWaCP2hF07eyH8u7E_RlG7K4sVy1vfmP5rD1Z80155lZ3J1uM8-FuG2PNsJrJNhCa7QEAuJqWw22nrffHNszVrLVccCwZ0ET5-mnIv-ib4SHHQ5AKcE-jKSThzvJ-qI8QVJyfT91fpVYwUUjwqBRqDdsTLjrvvas1Klrgs0lT7xUUoxV6wbGRYhmUYKtFkn6pGiK0D3DOcB33Hp4z4VF2XvLI9MjZXmMxap7bLlXgrgqIjosbw2Ko_vNYJKhwnKplYQi0ROXoak28fFNdTrjNt5SJslcLZYAxZjvcTOqbUlZfJvr9A2MABYpphReU5lh5-ZahpHABk6luDwTKXPBWaUcQcEZ2151c92BR68Goc6Z3NQ4cuknPtpxgDd9ZsPq1hUclDKrLVF_JcjN4MSA5_2kfboZBVKjRkOHdwb-K0NTWaRY1zRbF3e7OzkU67hqU_UDiRmQ97VYleVzAcws5Y-9MNzAGH3nO37nAZ6MsEwznErUBaiLvobS20NM5GyMHQ3jPS6msoUcsM#

// Afterwards Not Found
// The requested resource /api/auth/login/google/127.0.0.1:8001/login?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiM2IyYjAxZmMwNjJkOWNjMjk3NWI2YThlZWNjMTg0M2Q5OWM4MjI5YmUxOGZkYWIzODNmOTkxNzE3ODk5NmE4YjE5NThiYmM5MWJkMjljOTAiLCJpYXQiOiIxNjEzOTI2NTg3LjYwOTc0NyIsIm5iZiI6IjE2MTM5MjY1ODcuNjA5NzQ5IiwiZXhwIjoiMTY0NTQ2MjU4Ny42MDU5NzUiLCJzdWIiOiIxMyIsInNjb3BlcyI6W119.xc6EpGYRGcSESOLaTyyu15zOKReGaqDIyFJOMfTiyt6jqE-QZx29QJIrVer4Wk_ViYhSmFG0Hrc82tnk3KDGqPwwIrSIC9qVEI0A58p64AKiP1-lOqQFhpMYVMVtgr2vKQ44Hl7QLqyodMX40C8LwwmSh9dvWzKz6yxP__3Ogd0QcIBTUIWjp0HzEjNf2HYGVbSC7CXoeR0UqvZ6ZpNsrAbQu8Us66Yjb3S3Hi7dhLQQd3t3kpIpRq2dtXMU5y8ybQfoCuvqQIjiuKy31AvoUuyy0v_ucuwRgeINdjeJka0D2kUlT9j6X7dJxNysLkjGHvgR7S03cp4A579QwSSS4FrhOS380PI-Zfwjrx5Hfp0YaPhVvVrrnj7GJNEUO4tgWmzProDHwt9Y_Lrfs6tIELEuvVdNrCSSY_vqZnd-C4MXdPhQ7IxcZpT3ILQNq-C5V0CASSLv_Iu-RF29hxQro192dMT9fcTvLLRzqozOjDO6mgeuaH85MAVAT84l4idxZhYkusUIe1yvYu6uSW41CNYCerVOLR4zDO5t22DDsAzQ5hPSA0yVl6a75fNb8Lu1FYUB_rh1pOfFCCT6JHzdQ06L8kveI_4GUc4-tOF9duPH2CQ37s7mTG9n2Ll1KSdAANCeyD7k15Wm4L6zaCvpbDfXD82R3TWfEgc1ygJ1lXw was not found on this server.