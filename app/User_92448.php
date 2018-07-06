<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_92448 extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function sessions() {
        return $this->hasMany(Session92448::class, 'user_id');

        //->latest()->limit(1);
    }

    public function details() {
        return $this->hasMany(UserProfile::class, 'user_id');

        //->latest()->limit(1);
    }

    public function getId()
{
  return $this->id;
}

}
