<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
     ];

    public function advertisements()
    {
        return $this->belongsToMany(Advertisement::class);
    }
}
