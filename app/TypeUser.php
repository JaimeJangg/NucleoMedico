<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $table = 'type_user';
    protected $fillable = [
        'type'
    ];

    public function users(){
        return $this->hasMany('App\User', 'id_type_user', 'id');
    }
    public function permissions(){
        return $this->hasMany('App\Permission', 'id_type_user', 'id');
    }
}
