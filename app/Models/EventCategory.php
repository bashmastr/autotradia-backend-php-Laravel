<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventCategory extends Model
{
    use SoftDeletes;
    protected $guarded=[];

    public function events(){
        return $this->hasMany(Event::class,'id','eventcat_id');
    }
}
