<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\BlogCategory;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $request = request()->all();
        $sort = $request['sort'] ?? 'ASC';

        $categories = BlogCategory::all();
        $category = $request['category'] ?? $categories->first()->id;

        $articles = Article::orderby('created_at', $sort)->paginate(6);
        $articles->appends(['sort' => $sort]);
        // $articles->appends(['category' => $category]);

        return view('blog.blog',
            [
                'articles' => $articles,
                'categories' => $categories,
                'filter' => [
                    'sort' => $sort,
                    'category' => $category
                ]
            ]
        );
    }
}
