@extends('layout')
@section('content')
    <h1>{{$article->title}}</h1>
    <img src="{{ $article->image_url }}" alt="{{$article->exced}}">

    @include('article.comments', ['comments' => $article->comments])
@endsection