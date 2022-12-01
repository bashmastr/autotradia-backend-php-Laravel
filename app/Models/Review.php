<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function dealer(){
        return $this->belongsTo(User::class,'dealer_id','id');
    }
}
