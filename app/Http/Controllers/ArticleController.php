<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Psr\Log\LoggerInterface;

class ArticleController extends Controller
{
    public function show($articleId, Request $request, LoggerInterface $logger)
    {
        $article = Article::findOrFail($articleId);

        $user = $request->user();
        $userRepresentation = $user ? "User with id {$user->id}" : "Unknown user";
        $logger->info(
            $userRepresentation . ' accesed ' . "article with id {$articleId}", 
            ['id' =>$articleId, 'title' => $article->title,]
        );

        return view('article.article', ['article' => $article]);
    }
}
