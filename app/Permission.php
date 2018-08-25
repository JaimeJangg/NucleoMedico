<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = [
        'id_type_user', 'create', 'schedule', 'view'
    ];

    public function typeUser(){
        return $this->belongTo('App\TypeUser', 'id_type_user');
    }
}
