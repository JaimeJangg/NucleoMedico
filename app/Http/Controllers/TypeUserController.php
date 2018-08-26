<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\TypeUserService;

class TypeUserController extends Controller
{
    public function getAllTypeUser(){
        return TypeUserService::getAllTypeUser();
    }

    public function saveTypeUser(Request $request){
        if(TypeUserService::saveTypeUser($request)){
            return $request->all();
        }
        else{
            return false;
        }
    }

}
