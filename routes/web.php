<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Categorie;
use App\Models\Categorie_Post;
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

Route::get('/', function () {

    //$phone = User::find(1);
    //$phone = User::find(1)->phone;
    //return $phone;

    //$user = Phone::find(2);
    //$user = Phone::find(1)->user;
    //return $user;

    //$users = User::all();
    //return $users;

    //$comments = Post::find(1);
    //$comments2 = Post::find(2)->comments; 
    //return $comments2;

    //$post = Comment::find(1);
    //$post = Comment::find(5)->post;
    //return $post;

    //$posts = Post::all();
    //return $posts;

    //$posts = Post::with('comments')->get();
    //$comments = Comment::all();
    //return $posts;

    $posts = Post::with('categories')->get();
   //return $posts;


    return view('welcome' ,compact('posts'));
});
