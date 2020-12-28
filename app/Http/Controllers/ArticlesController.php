<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles.index',[
            'articles' => Article::latest()->get()
        ]);
    }

    public function show($id)
    {
        // dd($id);
        $article = Article::find($id);

        return view('articles.show',['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $article = new Article;

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }
}
