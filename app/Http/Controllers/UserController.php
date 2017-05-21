<?php

namespace App\Http\Controllers;

// Dependancy Injection to use Request object used below in parameter of the funtion ...$
use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    
    public function postSignUp(Request $req){
        $email = $req['emailSignUp'];
        $name = $req['nameSignUp'];
        $pass = bycrypt($req['passSignUp']);
    }
    
    public function postSignIn(Request $req){
        
    }
}