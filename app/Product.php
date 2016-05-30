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
        'name', 'offering_date', 'units', 'description', 'multimedia_content', 'tags', 'comments'
    ];// falta dados do utilizador: score, location e name
}
