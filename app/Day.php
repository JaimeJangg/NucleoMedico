<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = 'days';
    protected $fillable = [
        'day'
    ];

    public function daysByDoctor(){
        return $this->hasMany('App\DayByDoctor', 'id_day', 'id');
    }
}
