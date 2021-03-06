<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;   // Laravel 8 no longer automatically applies a controller namespace to your route definitions.
use App\Http\Controllers\ArticlesController;
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

// Hello World directly from routes.php
// Route::get('/', function () {
//     return "Hello World!";
// });

// Hello World from a Controller
// Route::get('/',[WelcomeController::class,'index']); // New Syntax
// File: app/Http/Controllers/WelcomeController.php


// Route::get('test', function () {
//     return view('test');    // Call Test View from resources/views
// });

// Route::get('test', function () {
//     $name = request('name');    // Get variables from URL

//     // Send Varaible to the View
//     return view('test',[
//         'name' => $name
//     ]);
// });

// Route::get('test', function () {
//     return view('test',[
//         'name' => request('name')
//     ]);
// });

// ROUTE THAT ACCPETS WILDCARD VALUES
// Route::get('posts/{post}', function ($post) {
//     // POSTS ARRAY STATIC
//     $posts = [
//         'first' => 'This is the first Post',
//         'second' => 'This is the second Post'
//     ];

//     // CHECK IF POST EXISTS 
//     if(!array_key_exists($post,$posts)){
//         abort(404,'Sorry, post not found'); // LARAVEL abort() function
//     }

//     // RETURN POST TO THE VIEW
//     return view('post',[
//         'post' => $posts[$post]
//     ]);
// });

// ROUTE TO A CONTROLLER 
Route::get('posts/{post}',[PostsController::class,'show']);

Route::get('/',function(){
    return view('welcome');
});

// Route::get('/articles',function(){
//     // $article = App\Models\Article::all();            // Fetch all the records of the table
//     // $article = App\Models\Article::take(2)->get();  // take(N) number of records from the table 
//     // $article = App\Models\Article::paginate(2);     // paginate(N) number of records 
//     //    $article = App\Models\Article::latest()->get();    // latest('column_name') ORDER BY column_name DESC BY DEFAULT is created_at  
//     //    $article = App\Models\Article::take(3)->latest()->get(); Take the 3 most recent articles

//     return view('articles',[
//         'articles' => App\Models\Article::latest()->get()
//     ]);
// });

Route::get('/articles',[ArticlesController::class,'index'])->name('articles.index');
Route::post('/articles',[ArticlesController::class,'store']);
Route::get('articles/create',[ArticlesController::class,'create']);
Route::get('articles/{article}',[ArticlesController::class,'show'])->name('articles.show');
Route::get('articles/{article}/edit',[ArticlesController::class,'edit']);
Route::put('/articles/{article}',[ArticlesController::class,'update']);


// Route::get('articles/create',[ArticlesController::class,'create']);  Cannot do a route like this

Route::get('/elements',function(){
    return view('elements');
});