<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return "hello everyone";
    }
    function adduser(){
        return "new user added";
    }
}
