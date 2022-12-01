<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdGallery extends Model
{
    protected $guarded=[];

    public function ad(){
        return $this->belongsTo(Ad::class);
    }
}
