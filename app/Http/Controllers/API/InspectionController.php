<?php

namespace App\Http\Controllers\API;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Models\InspectionReport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InspectionController extends Controller
{
    public function create(Request $request){
        // return response()->json($request->all());

        $data = $request->all();
        $finalArray = array();

        foreach ($data["ad_id"] as $key=>$ad_id) {
            $image_name = '';
            if(isset($data["img"][$key])){
                $image_name = $data["img"][$key]->getClientOriginalName();
                $data["img"][$key]->move('images/inspection-reports/'.$ad_id.'/', $image_name);
            }

            array_push($finalArray, array(
                'ad_id' => $ad_id,
                'img' => $image_name ?? "",
                'comment' => $data["comment"][$key] ?? "",
                'type' => $data["type"][$key],
                'top' => $data["top"][$key],
                'left' => $data["left"][$key]
            ));
        }
        InspectionReport::insert($finalArray);
        return response()->json(['status_code'=>200]);
    }

    public function get($id){
        // return response()->json(['status_code'=>200,'data'=>$id]);
        $ads = Ad::where('id',$id)->get();
        $car_details = DB::table('car_details')->where('ad_id',$id)->get();
        $inspection_data = InspectionReport::Where('ad_id','=',$id)->get();

        return response()->json(['status_code'=>200,'data'=>$inspection_data,'ad_data'=>$ads,'car_details'=>$car_details]);
    }
    public function getIds(){
        $ids = InspectionReport::select('ad_id')->distinct()->get();
        return response()->json($ids);
    }
}
