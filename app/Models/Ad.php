<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ad extends Model 
{


    use \Reportable\Traits\Reportable;
   
    use SoftDeletes;
    
   protected $guarded=[];
  
   public function user(){
       return $this->belongsTo(User::class);
   }
   public function addCategories(){
       return $this->belongsToMany(Category::class,'ad_categories')->withPivot('ad_id','category_id');
   }
   public function category(){
    return $this->belongsTo(Category::class);
   }  
   public function wishlist(){
       return $this->hasMany(WishList::class);
   }
   public function carDetails(){
      return $this->hasOne(CarDetail::class);
   }

   public function featuredds(){
    return $this->belongsToMany(Purchase::class,'featured_ad')->withPivot('purchase_id','ad_id','status');
  }

  public function galleries(){
      return $this->hasMany(AdGallery::class);
  }

  public function addcarFeatures(){
    return $this->belongsToMany(CarFeature::class,'ad_car_features')->withPivot('ad_id','car_feature_id','status');
 }
}
