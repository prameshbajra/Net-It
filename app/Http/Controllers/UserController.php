<?php

namespace App\Http\Controllers;

// Dependancy Injection to use Request object used below in parameter of the funtion ...$
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        return redirect()->route("dashBoard");
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
            return redirect()->route("dashBoard");
        }else{
            return "Password Not Correct !! Please check!!";
        }
    }
    public function accountPage(){
        if(Auth::user()){
            $user = Auth::user();
            return view("pages.account",compact('user'));
        }else{
            return "I have a strong feeling you are trying something fishy.";
        }
    }
    public function accountSave(Request $req, $id){
        if(Auth::user()){
            $user = User::find($id);
            $user->name = $req->newName;
            $user->update();
            $file = $req->file("image");
            $filename = $req->newName."-".$user->id.".jpg";
            if($file){
                Storage::disk("local")->put($filename,File::get($file));
            }
            return redirect()->route("accountPage");
        }
    }
    public function accountPicture($filename){
        $file = Storage::disk("local")->get($filename);
        return new Response($file,200);
    }
    public function logOut(){
        Auth::logout();
        return redirect()->route("home");
    }
}