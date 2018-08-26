<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;
use App\TypeUser;
use Illuminate\Http\Request;

class TypeUserService{

    public static function getAllTypeUser(){
        return TypeUser::all();
    }

    public static function saveTypeUser(Request $request){
        $typeUser = new TypeUser();
        $typeUser->type = $request->get('type');
        return $typeUser->save();
    }
    
}