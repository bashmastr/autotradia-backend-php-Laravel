<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $guarded=[];

    public function eventCategory(){
    return $this->belongsTo(EventCategory::class,'eventcat_id','id');  
    }
    public function comments(){
        return $this->hasMany(EventComment::class);
    }
}
