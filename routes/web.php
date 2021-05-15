<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "App\Http\Controllers\PostController@showPosts") -> name("posts");
Route::get('/posts/{id}', "App\Http\Controllers\PostController@showPost") -> where('id', '[0-9]+') -> name("post");

Route::get('/about', function(){
    return view("about");
}) -> name("about");

Route::get('/projects', function(){
    return view("projects");
}) -> name("projects");
