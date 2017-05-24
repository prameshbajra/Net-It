<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function dashBoard(){
        $posts = Post::orderBy("created_at","desc")->get();
        return view("pages.dashBoard",compact("posts"));
    }
    public function postCreate(Request $req){
        $post = new Post();
        $post->post = $req["postText"];
        if($req->user()->posts()->save($post)){
            return redirect()->route("dashBoard");
        }
        return "There is problem in creating your post.";
    }
    public function deletePost($id){
        $postSelected = Post::find($id)->first();
        $postSelected->delete();
        return redirect()->route("dashBoard");
    }
}