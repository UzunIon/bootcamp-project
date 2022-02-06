@extends('layout')
@section('content')
    <h1></h1>
    
    <article class="article">
        <div>
            <div class="absolute-bg">
                <img class="article__image" src="{{ $article->image_url }}" alt="{{$article->exced}}">
            </div>
        </div>
        <div class="article__container">
            <span class="article__category">{{ $article->author->name }}</span>
            <div class="article__content">
                <header>
                    <time class="article__time">{{$article->published_at->format('l, j F, Y')}}</time>
                    <h1 class="article__header"><span>{{$article->title}}</span></h1>
                </header>
            
                <p class="article__text">{{ $article->description }}</p>
                <div class="article__content-footer">
                    <div class="article__tags">
                        @foreach ($article->tags as $tag )
                            <span>article tags </span> 
                            <i class="fas fa-arrow-right"></i>
                            <a href="" class="article__tags-link"> {{ $tag->name}}</a>
                        @endforeach
                    </div>
                    <div class="article__share">
                        <a class="article__share-item" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="article__share-item" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="article__share-item" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @include('article.comments', ['comments' => $article->comments])
@endsection