<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'location', 'profile_photo', 'profile_url', 'presentation', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function typeToStr() {
        switch ($this->type) {
            case 0:
                return 'Administrator';
            case 1:
                return 'Participant';
        }

        return 'Unknown';
    }
}
