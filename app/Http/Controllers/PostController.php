<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postCreate(Request $req){
        $post = new Post();
        $post->post = $req["postText"];
        $req->user()->posts()->save($post);
        return view("pages.dashboard");
    }
}