<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 


Route::get('/markAsRead', function(){

  if(auth()->user()->unreadNotifications != null )
  {
      auth()->user()->unreadNotifications->markAsRead();
      foreach(auth()->user()->readNotifications as $noti){
          $noti->delete();
      }
  }
	return redirect()->back();

})->name('mark');





Auth::routes(['verify' => true,'register'=>false]);
Route::get('/',function(){
return redirect('login');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware'=>['auth','Admin']], function () {
Route::get('/dashboard',['uses'=>'Admin\DashboardController@index','as'=>'admin.dashboard']);

Route::get('logout', 'Admin\DashboardController@logout')->name('logout');

//categories
Route::resource('category', 'Admin\CategoryController');

//trash categories
Route::get('categories/trashed','Admin\CategoryController@trashed')->name('admin.categories.trashed');
//restore categories
Route::get('category/restore/{id}','Admin\CategoryController@restore')->name('admin.categories.restore');

Route::get('category/status/{id}','Admin\CategoryController@statusChange')->name('admin.categories.status');
//forcedelete categories
Route::post('category/forcedelete/{id}','Admin\CategoryController@forceDelete')->name('admin.categories.forceDelete');




  //event categories
  Route::resource('event-category', 'Admin\EventCategoryController');

  //trash event categories
Route::get('event-categories/trashed','Admin\EventCategoryController@trashed')->name('admin.event_categories.trashed');
//restore event categories
Route::get('event-category/restore/{id}','Admin\EventCategoryController@restore')->name('admin.event_categories.restore');
//forcedelete event categories
Route::post('event-category/forcedelete/{id}','Admin\EventCategoryController@forceDelete')->name('admin.event_categories.forceDelete');

Route::get('event-category/status/{id}','Admin\EventCategoryController@statusChange')->name('admin.eventcategory.status');


//event mangement
Route::resource('event', 'Admin\EventController');
Route::get('event/status/{id}','Admin\EventController@statusChange')->name('admin.event.status');
//trash events
Route::get('events/trashed','Admin\EventController@trashed')->name('admin.events.trashed');
//restore events
Route::get('event/restore/{id}','Admin\EventController@restore')->name('admin.event.restore');
//forcedelete events
Route::post('event/forcedelete/{id}','Admin\EventController@forceDelete')->name('admin.event.forceDelete');



//news management
Route::resource('news', 'Admin\NewsController');
Route::get('news/status/{id}','Admin\NewsController@statusChange')->name('admin.news.status');
//trash news
Route::get('news/trashed/all','Admin\NewsController@trashed')->name('admin.news.trashed');
//restore news
Route::get('news/restore/{id}','Admin\NewsController@restore')->name('admin.news.restore');
//forcedelete news
Route::post('news/forcedelete/{id}','Admin\NewsController@forceDelete')->name('admin.news.forceDelete');




  //news categories
Route::resource('news-category', 'Admin\NewsCategoryController');
Route::get('news-category/status/{id}','Admin\NewsCategoryController@statusChange')->name('admin.newscategory.status');
//trash news categories
Route::get('news-category/trashed/all','Admin\NewsCategoryController@trashed')->name('admin.news_categories.trashed');
//restore news categories
Route::get('news-category/restore/{id}','Admin\NewsCategoryController@restore')->name('admin.news_categories.restore');
//forcedelete news categories
Route::post('news-category/forcedelete/{id}','Admin\NewsCategoryController@forceDelete')->name('admin.news_categories.forceDelete');

Route::get('create-car-detail-dropdowns',['uses'=>'Admin\DashboardController@CreateCarDetailDropdowns','as'=>'admin.cardetaildropdown']);
Route::get('car-detail-dropdowns-all',['uses'=>'Admin\DashboardController@AllCarDetailDropdowns','as'=>'admin.cardetaildropdown.all']);

Route::get('car-detail-dropdowns/edit/{id}',['uses'=>'Admin\DashboardController@EditCarDetailDropdowns','as'=>'admin.cardetaildropdown.edit']);

Route::post('car-detail-dropdowns/update/{id}',['uses'=>'Admin\DashboardController@UpdateCarDetailDropdowns','as'=>'admin.cardetaildropdown.update']);
Route::post('car-detail-dropdowns/delete/{id}',['uses'=>'Admin\DashboardController@DeleteCarDetailDropdowns','as'=>'admin.cardetaildropdown.delete']);



Route::post('car-detail-dropdowns/store',['uses'=>'Admin\DashboardController@StoreCarDetailDropdowns','as'=>'admin.store.cardetaildropdown']);

//car Feature

Route::resource('car-features', 'Admin\CarFeaturesController');

Route::get('car-features/status/{id}','Admin\CarFeaturesController@statusChange')->name('admin.carFeatures.status');
  //instant sell car

Route::get('instant-sell-cars','Admin\ServicesController@instantsellCars')->name('admin.instant-sell-cars');

Route::get('instant-sell-car/{id}','Admin\ServicesController@instantsellDetail')->name('admin.instant-sell-details');

//wash car service
Route::get('wash-car-services','Admin\ServicesController@washServices')->name('admin.wash-services');

Route::get('wash-car-service/{id}','Admin\ServicesController@washServiceDetail')->name('admin.wash-service-details');

//import a car
Route::get('import-cars','Admin\ServicesController@impotCars')->name('admin.import-cars');
Route::get('import-car-detail/{id}','Admin\ServicesController@importCarDetail')->name('admin.import-car-details');

//hire a car
Route::get('hire-a-cars','Admin\ServicesController@hiredCars')->name('admin.hired-cars');

Route::get('hire-a-car-detail/{id}','Admin\ServicesController@hiredCarDetail')->name('admin.hired-car-details');

//legal pages
Route::resource('legal-pages', 'Admin\LegalPageController');

Route::get('legal-pages/status/{id}','Admin\LegalPageController@statusChange')->name('admin.legal.status');
//ad mangement
Route::resource('ads', 'Admin\AdController');

//trash ads
Route::get('ads/trashed/all','Admin\AdController@trashed')->name('admin.ads.trasheds');
//restore ads
Route::get('ads/restore/{id}','Admin\AdController@restore')->name('admin.ad.restore');
//forcedelete ads
Route::post('ads/forcedelete/{id}','Admin\AdController@forceDelete')->name('admin.ad.forceDelete');

Route::get('ad/status/{id}','Admin\AdController@statusChange')->name('admin.ad.status');

  //packageroutes
Route::resource('packages', 'Admin\PackageController');

//trash ads
Route::get('packages/trashed/all','Admin\PackageController@trashed')->name('admin.packages.trashed');
//restore ads
Route::get('package/restore/{id}','Admin\PackageController@restore')->name('admin.package.restore');
//forcedelete ads
Route::post('packages/forcedelete/{id}','Admin\PackageController@forceDelete')->name('admin.package.forceDelete');

Route::get('packages/status/{id}','Admin\PackageController@statusChange')->name('admin.package.status');
  //sociallink
Route::resource('social-links', 'Admin\SocialLinkController');

Route::get('social-links/status/{id}','Admin\SocialLinkController@statusChange')->name('admin.sociallink.status');
  //dealer reviews

Route::resource('dealer-reviews', 'Admin\ReviewController');

Route::get('dealer-reviews/status/{id}','Admin\ReviewController@statusChange')->name('dealer-reviews.status');

  //users management

Route::resource('users', 'Admin\UserController');

Route::get('users/status-update/{id}','Admin\UserController@statusUpdate')->name('admin.user.status');

Route::get('user/profile-update','Admin\UserController@profileUpdate')->name('admin.profile.update'); 

Route::post('user/profile-update','Admin\UserController@profileUpdated')->name('admin.profile.updated'); 

Route::post('users/detail-update','Admin\UserController@detailUpdate')->name('admin.detailprofile.update'); 

Route::post('users/password-update','Admin\UserController@passwordUpdate')->name('admin.password.update'); 
  

//dealer 
Route::resource('dealers', 'Admin\DealerController');
Route::get('is-dealer/{id}', 'Admin\DealerController@isTrusted')->name('admin.trusted-dealers');
//comments
Route::get('news-comments','Admin\CommentController@newsComments')->name('admin.news.comments');

Route::get('news-comments/status/{id}','Admin\CommentController@newsStatus')->name('admin.news-comments.status');

Route::get('news-comments/delete/{id}','Admin\CommentController@deleteNewsComment')->name('admin.news-comments.delete');

Route::get('event-comments','Admin\CommentController@eventComments')->name('admin.event.comments');

Route::get('event-comments/status/{id}','Admin\CommentController@eventStatus')->name('admin.event-comments.status');

Route::get('event-comments/delete/{id}','Admin\CommentController@deleteEventComment')->name('admin.event-comments.delete');


//purchase mangement
Route::get('purchase','Admin\PurchaseController@index')->name('admin.purchase.index');

Route::get('purchase/view/{id}','Admin\PurchaseController@view')->name('admin.purchase.view');

Route::get('purchase/print/{id}','Admin\PurchaseController@print')->name('admin.purchase.print');

});



Route::get('welcome', function(){
    return view('emails.welcome');
});


Route::get('contact', function(){
  return view('emails.contact_us');
});


Route::get('submit-ad', function(){
  return view('emails.submit_ad');
});


Route::get('approved-ad', function(){
  return view('emails.approved_ad');
});


Route::get('remove-ad', function(){
  return view('emails.remove_ad');
});



Route::get('service-form', function(){
  return view('emails.service_submit');
});



Route::get('package-purchase', function(){
  return view('emails.package_purchase');
});


Route::get('package-expired', function(){
  return view('emails.package_expired');
});



Route::get('account-deactive', function(){
  return view('emails.account-deactive');
});



Route::get('ad-featured', function(){
  return view('emails.ad-featured');
});



Route::get('package-expired', function(){
  return view('emails.package_expired');
});


 
 





