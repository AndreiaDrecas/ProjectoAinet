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

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }
    
    public function parent()  
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }  

    public function replies()  
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id');
    }  
}
