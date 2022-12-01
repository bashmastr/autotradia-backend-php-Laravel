<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
   
    use SoftDeletes;
    
    public function assignNewsCategory(){
        return $this->belongsToMany(NewsCategory::class,'assign_news_categories')->withPivot('news_id','news_category_id');
    }
    public function comments(){
        return $this->hasMany(NewsComment::class);
    }
}
