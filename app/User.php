<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','last_name', 'token', 'phone', 'id_type_user'
    ];
    
    public function typeuser(){
        return $this->belongsTo('App\TypeUser', 'id_type_user');
    }
    public function daysByDoctor(){
        return $this->hasMany('App\DayByDoctor', 'id_user', 'id');
    }
    public function daysOff(){
        return $this->hasMany('App\DayOff', 'id_user', 'id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
