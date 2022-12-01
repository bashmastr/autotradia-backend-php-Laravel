<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class DealerController extends Controller
{
    public function getAllDealers(){
        $user = User::where("is_dealer",1)->with("userDetail")->withCount('ads')->with("reviews")->get()->paginate(7);
        $dealers = DB::table('user_details')->join('users','user_details.user_id','users.id')
        ->where('users.is_dealer','=',1)->where('city','!=','null')
        ->select('city', DB::raw('count(*) as total'))
        ->groupBy('city')
        ->get();  
        if($user->count() > 0){
            return response()->json(['status_code'=>200,'data'=>$user,'dealer'=>$dealers,'message'=>'dealer data']);
        }
        return response()->json(['status_code'=>404,'data'=>null,'message'=>'Sorry, No Dealer are Found']);
    }
}
