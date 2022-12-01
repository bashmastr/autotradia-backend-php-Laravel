<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
    protected $guarded=[];

    public function addcarFeatures(){
        return $this->belongsToMany(Ad::class,'ad_car_features')->withPivot('ad_id','car_feature_id','status');
    }
    public function instantcarFeatures(){
        return $this->belongsToMany(InstantSellCar::class,'instant_car_feature')->withPivot('instant_sell_car_id','car_feature_id','status');
    }
}
