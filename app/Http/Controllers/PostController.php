<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    function showPosts(){
        $posts = Post::all();
        return view("blog", ["posts" => Post::paginate(3)]);
    }

}
