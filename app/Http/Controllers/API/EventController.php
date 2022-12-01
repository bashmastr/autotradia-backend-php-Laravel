<?php

namespace App\Http\Controllers\API;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Http\Resources\EventResource;
use App\Http\Resources\EventCategoryResource;

class EventController extends Controller
{
    public function eventCategory(){
        $eventcategories=EventCategory::all();
        if($eventcategories!=null){
            return \response()->json(['status_code'=>200,'data'=>EventCategoryResource::collection($eventcategories)->paginate(10),'message'=>"event categories"]);
        }
         return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No Event Categories are Found']);

    }
    public function events(){
      $event=Event::all();
        if($event!=null){
            return \response()->json(['status_code'=>200,'data'=>EventResource::collection($event)->paginate(4),'message'=>"event list"]);
        }
         return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No Event are Found']);

    }

    public function getPopularEvents(){
        $event_ids = DB::table('event_comments')
        ->select( DB::raw('event_id'), DB::raw('count(*) as count'))
        ->groupBy('event_id')
        ->orderBy('count', 'desc')
        ->take(6)
        ->get();
        // dd($events_ids);

        $temp = array();
        foreach($event_ids as $t){
            // dd($t);
            array_push($temp,$t->event_id);
        }
        $events=Event::whereIn('id',$temp)->get();
        // dd($events);
        if($events!=null){
            return \response()->json(['status_code'=>200,'data'=>EventResource::collection($events),'message'=>"Popular Events"]);
        }
        return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No Event are Found']);
    }

    public function latest_events(){
        $event=Event::latest()->first();
        if($event!=null){
            return \response()->json(['status_code'=>200,'data'=>$event,'message'=>"latest event"]);
        }
        return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No Event are Found']);
    }

    public function featuredEvents(){
        $events=Event::where('status','1')->take(3)->get();
        if(count($events) > 0){
            return response()->json(['status_code'=>200,'data'=>EventResource::collection($events),'message'=>"featured events list"]);
        }else{
            // inRandomOrder()->
            $events=Event::OrderBy("id","desc")->take(3)->get();
            return response()->json(['status_code'=>200,'data'=>EventResource::collection($events),'message'=>"featured events list"]);
        }
        return response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No Event are Found']);

    }
    public function get_events($id){
        $events=Event::where('id',$id)->get();
        if($events!=null){
            return \response()->json(['status_code'=>200,'data'=>EventResource::collection($events),'message'=>"events detail"]);
        }
        return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No Event are Found']);
    }
}
