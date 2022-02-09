<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\BlogCategory;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $request = request()->all();
        $sort = $request['sort'] ?? 'ASC';

        $categories = BlogCategory::all();
        $category = $request['category'] ?? $categories->first()->id;

        $comments = Comment::all();
        $articles = Article::orderby('published_at', $sort)->paginate(6);
        $articles->appends(['sort' => $sort]);
        // $articles->appends(['category' => $category]);

        return view('blog.blog',
            [
                'articles' => $articles,
                'categories' => $categories,
                'comments' => $comments,
                'filter' => [
                    'sort' => $sort,
                    'category' => $category
                ]
            ]
        );
    }
}
