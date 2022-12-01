<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $guarded=[];

    public function ad(){
        return $this->belongsTo(Ad::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
