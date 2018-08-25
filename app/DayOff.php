<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayOff extends Model
{
    protected $table = 'days_off';
    protected $fillable = [
        'date', 'id_user'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
