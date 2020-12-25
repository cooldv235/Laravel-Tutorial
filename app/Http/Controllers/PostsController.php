<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use DB;     // Use DATABASE (DB) Class

class PostsController extends Controller
{
    public function show($slug)
    {
            // $post = DB::table('posts')->where('slug',$slug)->first();
            // $post = Post::where('slug',$slug)->firstOrFail(); // using Eloquent Model, first record if available in the DB, or fail and generate a 404

            // dd($post);  // Laravel Function Dump and Die


            // $posts = [
            //     'first' => 'This is the first Post',
            //     'second' => 'This is the second Post'
            // ];

            // CHECK IF POST EXISTS 
            // if(!array_key_exists($post,$posts)){
            //     abort(404,'Sorry, post not found'); // LARAVEL abort() function
            // }

            // RETURN POST TO THE VIEW
            // return view('post',[
            //     'post' => $posts[$post]
            // ]);

            return view('post',[
                'post' => Post::where('slug',$slug)->firstOrFail()
            ]);

    }
}
