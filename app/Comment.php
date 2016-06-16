<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  
     protected $fillable = [
        'comment',
        'advertisement_id',
        'parent_id'
    ];



    public function user(){
        return $this->belongsTo('App/User');
    }

    public function advertisement(){
        return $this->belongsTo('App/Advertisement');
    }
    

}
