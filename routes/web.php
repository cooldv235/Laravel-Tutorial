<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;   // Laravel 8 no longer automatically applies a controller namespace to your route definitions.

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

Route::get('/contact',function(){
    return view('contact');
});