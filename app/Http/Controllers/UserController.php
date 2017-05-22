<?php

namespace App\Http\Controllers;

// Dependancy Injection to use Request object used below in parameter of the funtion ...$
use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view("pages.index");
    }
    
    public function postSignUp(Request $req){
        // $this->validate($req,[
        // "email" => "email|required|unique:users",
        // "name" => "required|max:200",
        // "password" => "required|min:4"
        // ]);
        //    This was working earlier but now no ... use js insted of this ....
        
        $email = $req['emailSignUp'];
        $name = $req['nameSignUp'];
        $pass = bcrypt($req['passSignUp']);
        // Aaba insert ko lai ...
        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $pass;
        $user->save();
        Auth::login($user);
        return view("pages.dashboard");
    }
    public function postSignIn(Request $req){
        // This was working earlier but now no ... use js insted of this ....
        // $this->validate($req,[
        // "email" => "required",
        // "password" => "required"
        // ]);
        
        $email = $req['emailSignIn'];
        $pass = $req['passSignIn'];
        if(Auth::attempt(['email'=>$email,'password'=>$pass])){
            return view("pages.dashboard");
        }else{
            return "Password Not Correct !! Please check!!";
        }
    }
}