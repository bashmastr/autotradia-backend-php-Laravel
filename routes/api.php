<?php

use App\Models\Ad;
use App\Models\News;

use App\Models\Event;
use App\Models\Category;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\CarDetailDropdown;
use App\Http\Resources\AdResource;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NewsResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['prefix' => 'auth'], function () {

    Route::get('login/{provider}', 'API\SocialController@redirect');
    Route::get('login/{provider}/callback','API\SocialController@Callback');

    Route::post('login', 'API\AuthController@login');
    Route::post('signup', 'API\AuthController@signup');
    Route::post('password/email', 'API\Auth\ResetPasswordController@create');
    Route::get('password/reset/{token}', 'API\Auth\ResetPasswordController@find');
    Route::post('/reset', 'API\Auth\ResetPasswordController@reset');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'API\AuthController@logout');
        Route::post('profile/update', 'API\AuthController@profile_update');
        Route::get('user', 'API\AuthController@user');
        Route::get('/email/resend', 'API\Auth\VerificationController@resend')->name('verification.resend');
        Route::get('/email/verify/{id}/{hash}', 'API\Auth\VerificationController@verify')->name('verification.verify-api');
    });

});


//notiificaitons mark as read route

Route::get('/markAsRead', function(){


    auth('api')->user()->unreadNotifications->markAsRead();
    foreach(auth('api')->user()->readNotifications as $noti){
        $noti->delete();
    }



    return response()->json(['status_code' => 200,'message'=> 'all notifications read']);
});


Route::get('notifications','API\GeneralController@notifications');





//instantSellcar

Route::post('instant-sell-car','API\ServicesController@instantSellCar');

Route::post('hire-a-car','API\ServicesController@hireCar');

Route::post('wash-service','API\ServicesController@washService');

Route::post('import-a-car','API\ServicesController@importCar');

Route::get('social-links','API\GeneralController@socialLinks');

Route::get('car-detail-dropdowns','API\AdController@cardetaildropdowns');


//legal pages
Route::get('privacy-policy','API\GeneralController@privacy');
Route::get('terms','API\GeneralController@terms');
Route::get('refund-policy','API\GeneralController@refund');

Route::get('legal-pages','API\GeneralController@allLegalPages');

//car Features

Route::get('car-features','API\ServicesController@carFeatures');

//ad category
Route::get('ad-category','API\AdController@adCategory');
//adstore
Route::group(['middleware' => 'auth:api' ], function() {
Route::post('add-store','API\AdController@adStore');

//update
Route::post('update-ad/{id}','API\AdController@updateAd');

Route::get('add-destroy/{id}','API\AdController@destroy');

Route::get('add-restore/{id}','API\AdController@restoreAd');

Route::get('add-delete/{id}','API\AdController@deleteAd');
//dealer review

Route::post('dealer-reviews/store','API\ReviewController@storeReview');

Route::post('event-comments/store','API\CommentController@eventCommentStore');

Route::post('news-comments/store','API\CommentController@newsCommentStore');

//purchase route

Route::post('purchase/store','API\PurchaseController@purchaseStore');

Route::get('my-purchases','API\PurchaseController@myPurchases');

Route::get('my-active-purchases','API\PurchaseController@myActivePurchases');

Route::post('feature-ad','API\PurchaseController@featuredAd');

//wishlist api

Route::post('add-to-wishlist','API\WishlistController@store');
//view wishlist

Route::get('wishlist','API\WishlistController@view');
//delete from wishlist
Route::get('remove-wishlist/{id}','API\WishlistController@wishlistDelete');

});
//all ads
Route::get('all-ads','API\AdController@allAds');

Route::get('latest-ads','API\AdController@latestAds');

Route::get('get-ad/{slug}','API\AdController@getAd');

Route::get('get-seller-ad/{id}','API\AdController@getSellerAd');

Route::get('featured-ads','API\AdController@FeatureAds');


//seller add

Route::get('seller-ads/{status}','API\AdController@sellerAds');

Route::get('seller-ads-removed','API\AdController@sellerRemovedAds');
Route::get('seller-ads-featured','API\AdController@sellerFeatureAds');

// Route::get('seller-featured-ads','API\AdController@sellerFeatureAds');


//user reviews
Route::get('user-reviews','API\ReviewController@userReviews');

//dealer review

Route::get('dealer-reviews','API\ReviewController@userReviews');

//event category

Route::get('event-category','API\EventController@eventCategory');

Route::get('events','API\EventController@events');

Route::get('featured-events','API\EventController@featuredEvents');

Route::get('news-category','API\NewsController@newsCategory');

Route::get('news','API\NewsController@news');
Route::get('latest-news','API\NewsController@latest_news');
Route::get('latest-events','API\EventController@latest_events');
Route::get('news/{id}','API\NewsController@get_news');
Route::get('events/{id}','API\EventController@get_events');

Route::get('featured-news','API\NewsController@featurednews');

Route::get('packages','API\GeneralController@packages');

// TEST ROUTES
Route::post('inspection-report/create','API\InspectionController@create');
Route::get('inspection-report/{id}','API\InspectionController@get');
Route::get('inspection-report-ids','API\InspectionController@getIds');

Route::post('events-comments/store','API\CommentController@eventCommentStore')->middleware('auth:api');

Route::get('events-comments/{id}','API\CommentController@eventComments');



Route::get('news-comments/{id}','API\CommentController@newsComments');

Route::post('contact','API\GeneralController@contact');

Route::get('description-helpers','API\GeneralController@description_helpers');


//search api

Route::post('news-search','API\SearchController@newsSearch');

Route::post('events-search','API\SearchController@eventSearch');


Route::get('ads-category/{slug}','API\SearchController@SearchByCategory');

Route::get('condition/{condition}','API\SearchController@conditionSearch');

Route::get('advance-search','API\SearchController@getadvanceSearch');

Route::post('advance-search','API\SearchController@advanceSearch');

Route::get('explore-cars','API\SearchController@getexploreCars');
Route::post('explore-cars','API\SearchController@exploreCars');

Route::get('common-ads/{id}','API\AdController@getCommonAds');
Route::get('popular-ads','API\AdController@getPopularAds');

Route::get('popular-news','API\NewsController@getPopularNews');
Route::get('popular-events','API\EventController@getPopularEvents');

Route::get('ad-filter-counts','API\AdController@getAllDataCount');



Route::get('sort-ads/{sort}','API\AdController@sortAdBy');

Route::get('all-dealers','API\DealerController@getAllDealers');

Route::post('search-dealers','API\SearchController@searchDealers');

// Home Page API
Route::get('home', function(){
    // $ads = Ad::where('status','1')->latest()->limit(5)->get();
    $ad_count = Ad::where('status','1')->count();
    $event_latest = Event::latest()->first();
    $news = News::latest()->limit(3)->get();
    $dropdowns = CarDetailDropdown::all();
    $categories = Category::where('status', 1)->get();
     
    // $purchase_id=DB::table('featured_ad')->pluck('purchase_id');

    // $purchase_ids=Purchase::whereIn('id',$purchase_id)->where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
    // $featured_ad = [];
    // if($purchase_ids->count() > 0){
    //     $ad_ids=DB::table('featured_ad')->pluck('ad_id');
    //     $featured_id=DB::table('featured_ad')->whereIn('ad_id',$ad_ids)->where('purchase_id',$purchase_ids)->pluck('ad_id');
    //     if($featured_id->count() > 0){
    //         $featured_ad=AdResource::collection(Ad::whereIn('id',$featured_id)->limit(5)->get());
    //     }
    // }

    $purchase_id=DB::table('featured_ad')->pluck('purchase_id');
    $purchase_ids=Purchase::whereIn('id',$purchase_id)->where('expiry_date',">=",Carbon::now()->format('Y-m-d h:i:s'))->pluck('id');
    $ad_ids=DB::table('featured_ad')->whereIn('purchase_id',$purchase_ids)->pluck('ad_id');
    if($ad_ids->count() >0){
        $featured_id=Ad::whereIn('id',$ad_ids)->where('status','1')->pluck('id');
        $featured_ad=AdResource::collection(Ad::whereIn('id',$featured_id)->limit(5)->get());
    }else{
        $featured_ad = [];
    }
    return response()->json([
        'status_code'=>200,
        'ads'=>$featured_ad,
        'ads_count'=>$ad_count,
        'event'=>$event_latest,
        'news'=>NewsResource::collection($news),
        'dropdowns'=>$dropdowns,
        'categories'=>$categories,
        'message'=>'home page data'
    ]);
});

