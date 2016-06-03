<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{



    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'location' , 'profile_photo' , 'presentation', 'profile_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
    *
    *A user can have many advertisements
    *
    */
    public function advertisements(){
        return $this->hasMany('App\Advertisement','owner_id');
    }

    public function isAdmin()
    {
        if($this->admin == 1)
            return true;
        return false;
    }

}
