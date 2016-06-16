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
        return $this->belongsTo(User::class);
    }

    public function advertisement(){
        return $this->belongsTo(Advertisement::class);
    }
    

}
