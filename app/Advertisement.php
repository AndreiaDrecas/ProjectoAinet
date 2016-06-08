<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{

    protected $fillable = [
        'name', 
        'description', 
        'price_cents', 
        'trade_prefs', 
        'quantity',
        'available_on'

    ];
    
    protected $dates = ['available_on'];

    public function scopeAvailable($query)
    {
        $query->where('available_on','<=', Carbon::now());
    }

    public function scopeUnavailable($query)
    {
        $query->where('available_on','>', Carbon::now());
    }



    public function setAvailableOnAttribute($date)
    {
        $this->attributes['available_on'] = Carbon::parse($date);
    }
    
    /**
    * An Advertisement is owned by a user
    */

    public function user(){
        return $this->belongsTo('App\User'); //owner_id
    }

    
}
