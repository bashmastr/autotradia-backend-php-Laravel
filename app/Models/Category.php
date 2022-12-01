<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{



    use SoftDeletes;
    protected $guarded=[];

    // public function ads(){
    // return $this->belongsToMany(Ad::class,'ad_categories')->withPivot('ad_id','category_id');
    // }
    
    public function ad(){
        return $this->hasOne(Ad::class);
    }

}

