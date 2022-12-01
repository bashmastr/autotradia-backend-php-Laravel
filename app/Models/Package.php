<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
 
    
    use SoftDeletes;
    protected $guarded=[];

    public function purchase(){
     return $this->hasOne(Purchase::class);
    }
}
