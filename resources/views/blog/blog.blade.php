@extends('layout')
@section('content')
@foreach ($articles as $article) 
@endforeach
<div class="container">
    <main class="main">
        <div class="events__header">
            <aside class="events__nav">
                <ul class="events__nav-list">
                    <li class="events__nav-item active">
                        <a class="events__nav-item__link " href="#">All</a>  
                    </li>
                    <li class="events__nav-item">
                        <a class="events__nav-item__link" href="#">Recent</a> 
                    </li>
                    <li class="events__nav-item">
                        <a class="events__nav-item__link" href="#">Events & festivals</a> 
                    </li>
                    <li class="events__nav-item">
                        <a class="events__nav-item__link" href="#">News</a>   
                    </li>
                </ul>
            </aside>
            <div class="">
                <form method="GET" action="/blog" class="row row-cols-3 p-0 m-0">
                    <div class="col">
                        <select class="form-select" name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if($filter['category'] === $category->id) selected @endif
                                >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select" name="sort">
                            <option value="DESC" @if($filter['sort'] === 'DESC') selected @endif>DESC</option>
                            <option value="ASC" @if($filter['sort'] === 'ASC') selected @endif>ASC</option>
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn btn-dark">Apply sort</button>
                    </div>
                </form>
            </div>
        </div>
        <section class="events__main">
            <div class="main__article">
                <a href="{{route('article',['articleId' => $article->id])}}"  class="article__link-img" aria-label="main article">
                    <img src="{{ $article->image_url }}" alt="" class="article__img">
                </a>
                <div class="article__content">
                    <div class="article__header">
                        <span class="article__header-tag">{{ $article->category->name }}</span>
                        <time class="article__header-date" datetime="2030-12-1 19:00">{{date('d'.' '.'M'.', '.'y', strtotime($article->published_at))}}</time>
                    </div>
                    <article class="article__text">
                        <a class="article__link" href="{{route('article',['articleId' => $article->id])}}">
                            <h3 class="article__text-title"> {{ $article->title }} </h3>
                            <p class="article__text-subtitle">{{ $article->excerpt }}</p>
                        </a>
                        <div class="article__footer">
                            <address class="article__author"><a rel="author" href="#">{{ $article->author->name }}</a>
                            </address>
                            <a href="{{route('article',['articleId' => $article->id])}}" class="article__comments"> <span class="article__comments-counter">{{ $article->comments()->count() }}</span> Comments</a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="article__items">
                @foreach ($articles as $article)
                    @include('blog.blog-article', ['article' => $article])
                @endforeach
            </div>
            <div class="row">
                {{ $articles->links() }}
            </div>
            
            <button class="events__main-btn">See more posts</button>
        </section>
    </main>
</div>
@endsection