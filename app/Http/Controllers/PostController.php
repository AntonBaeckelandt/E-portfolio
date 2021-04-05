<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    function showPosts(){
        return view("blog", ["posts" => Post::orderBy('created_at', 'desc')->paginate(3)]);
    }

    function showPost($id){
        return view("post", ["post" => Post::where('id', $id)->first()]);
    }

}
