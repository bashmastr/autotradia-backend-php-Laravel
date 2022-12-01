<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{

    use SoftDeletes;
 
    
    protected $guarded=[];

    public function news(){
        return $this->belongsToMany(News::class,'assign_news_categories')->withPivot('ad_id','category_id');
    }
}
