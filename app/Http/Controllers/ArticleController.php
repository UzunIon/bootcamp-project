<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\ModelLogger;

class ArticleController extends Controller
{
    public function show($articleId, Request $request, ModelLogger $logger)
    {
        $article = Article::findOrFail($articleId);

        $logger->logModel($request->user(), $article);
        
        return view('article.article', ['article' => $article]);
    }
}
