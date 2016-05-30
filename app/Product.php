<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
     /**
=======
    /**
>>>>>>> refs/remotes/origin/master
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'available_on', 'available_until', 'price_cents', 'trade_prefs', 'quantity', 'media', 'tags', 'blocked'
    ];// falta dados do utilizador: score, location e name
}
