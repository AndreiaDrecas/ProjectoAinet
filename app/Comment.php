<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  
     protected $fillable = [
        'comment',
      

    ];



     public function user(){
        return $this->hasManyThrough('App\Comment','App\User', 'advertisement_id','user_id');
    }

    

}
