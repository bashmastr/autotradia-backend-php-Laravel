<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }
    
    public function featuredAds(){
        return $this->belongsToMany(Ad::class,'featured_ad')->withPivot('purchase_id','ad_id','status');
    }
}
