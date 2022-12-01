<?php

namespace App\Http\Controllers\API;

use App\Models\News;
use App\Models\NewsComment;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Http\Resources\NewsCategoryResource;

class NewsController extends Controller
{
    public function newsCategory(){
        $newscategories=NewsCategory::where('status','1')->paginate(10);

        if($newscategories!=null){
            return \response()->json(['status_code'=>200,'data'=>NewsCategoryResource::collection($newscategories),'message'=>"news categories"]);
        }
         return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No News Categories are Found']);

    }
    public function get_news($id){
        $news=News::where('id',$id)->get();

        if($news!=null){
            return \response()->json(['status_code'=>200,'data'=>NewsResource::collection($news),'message'=>"news detail"]);
        }
        return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No News are Found']);

    }

    public function getPopularNews(){
        $news_ids = DB::table('news_comments')
        ->select( DB::raw('news_id'), DB::raw('count(*) as count'))
        ->groupBy('news_id')
        ->orderBy('count', 'desc')
        ->take(6)
        ->get();
        // dd($news_ids);

        $temp = array();
        foreach($news_ids as $t){
            // dd($t);
            array_push($temp,$t->news_id);
        }
        $news=News::whereIn('id',$temp)->get();
        // dd($news);
        if($news!=null){
            return \response()->json(['status_code'=>200,'data'=>NewsResource::collection($news),'message'=>"Popular News"]);
        }
        return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No News are Found']);
    }

    public function news(){
      $news=News::all();

        if($news!=null){
            return \response()->json(['status_code'=>200,'data'=>NewsResource::collection($news)->paginate(4),'message'=>"news list"]);
        }
         return \response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No News are Found']);

    }
    public function latest_news(){
        $news=News::latest()->limit(3)->get();
        if($news->count() > 0){
            return \response()->json(['status_code'=>200,'data'=>NewsResource::collection($news),'message'=>'List of News']);
        }
        return \response()->json(['status_code'=>404,'data'=>'','message'=>'Sorry, No News are Found']);
    }
    public function featurednews(){
        $news=News::where('featured','1')->take(3)->get();
        if(count($news) > 0){
            return response()->json(['status_code'=>200,'data'=>NewsResource::collection($news),'message'=>"featured news list"]);
        }else{
            // inRandomOrder()->
            $news=News::OrderBy("id","desc")->take(3)->get();
            return response()->json(['status_code'=>200,'data'=>NewsResource::collection($news),'message'=>"featured news list"]);
        }
        return response()->json(['status_code'=>200,'data'=>'','message'=>'Sorry, No News are Found']);

    }
}
