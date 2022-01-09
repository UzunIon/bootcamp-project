<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        Article::select([
            'id',
            'title',
            'published_at',
            ])
                ->where('published_at', '>=', Carbon::today()->startOfYear())
                ->where('published_at', '>=', Carbon::today()->endOfYear())
                ->get();
        
        Article::select([
            'id',
            'title',
            'published_at',
            ])
            ->where('published_at', 'DESC')->limit(5)->get();

        

        return view('home.home');
    }
}
