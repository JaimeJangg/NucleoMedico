<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class UserService{

    public static function getAuthUser(){
        return Auth::user();
    }

    public static function getAllUsers(){
        $users = User::orderBy('id', 'asc')->where('id_type_user', '!=', 1)->get();;
        return $users;
    }

    public static function saveUser(Request $request){
        $user = new User();
        $user->fill($request->getAll());
        return $user->save();
    }
}