<?php

use App\Controllers\Controller;
use App\Models\User;

class UserController extends Controller{

    public static function index()
    {
        $user = User::find('all');

        
        return $user;
    }
}