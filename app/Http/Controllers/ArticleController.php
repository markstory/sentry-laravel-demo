<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Show a blog post
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article.view', ['article' => $article]);
    }
}
