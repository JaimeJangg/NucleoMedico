<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;

class UsersController extends Controller
{
    public function getAllUsers(){
        $users = UserService::getAllUsers();
        return $users;
    }
}
