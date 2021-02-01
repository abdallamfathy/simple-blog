<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tag;


class Post extends Model
{
   use SoftDeletes;

   protected $fillable=[
   'title','featured','category_id','content','slug'
   ];

   protected $dates=['deleted_at'];
    
    public function getFeaturedAttributes($featured){
     
        return asset($featured);
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
