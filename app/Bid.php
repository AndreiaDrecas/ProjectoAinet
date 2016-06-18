<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{

    protected $fillable = [
    'buyer_id',
    'advertisement_id',
    'comment',  
    'price_cents', 
    'trade_prefs', 
    'quantity',
    'trade_location'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
