<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstantSellCar extends Model
{
    protected $guarded=[];

    public function instantcarFeatures(){
        return $this->belongsToMany(CarFeature::class,'instant_car_feature')->withPivot('instant_sell_car_id','car_feature_id','status');
    }
}
