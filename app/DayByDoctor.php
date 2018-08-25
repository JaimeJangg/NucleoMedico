<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayByDoctor extends Model
{
    protected $table = 'days_by_doctor';
    protected $fillable = [
        'id_user', 'id_day'
    ];

    public function day(){
        return $this->belongsTo('App\Day', 'id_day');
    }
    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
