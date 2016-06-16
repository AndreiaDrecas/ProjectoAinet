<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    public function advertisements()
    {
        return $this->belongsToMany('App\Advertisement');
    }
}
