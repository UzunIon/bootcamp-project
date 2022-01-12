{{-- 
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">{{$article->excert}}</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="{{route('blogArticle', ['id' => $article->$id])}}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ $article->image_url }}" alt="{{ $article->title }}">

        </div>
      </div> --}}

        
<div class="article__card">
    <div class="article__category-name">
        <h4 class="category-name">{{ $article->category->name }}</h4>
    </div>
    <a href="{{route('article',['articleId' => $article->id])}}" class="article__card-link">
        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="article__card-img">
    </a>
    <div class="article-card__content">
        <div class="aricle__card-tags">
            <span class="card-tags__item">Music</span>
            <span class="card-tags__item">Opera</span>
            <span class="card-tags__item">Nature</span>
        </div>
        <time class="article__content-date" >{{date('d'.' '.'M'.', '.'y', strtotime($article->published_at))}}</time>
        <a href="{{route('article',['articleId' => $article->id])}}" class="article__content-link">
            <h4 class="article__content-title">{{ $article->title }}</h4>
            <p class="article__content-text">{{ $article->excerpt }}</p>
        </a>
        <div class="article__content-footer">
            <address class="article__author"><a rel="author" href="#">{{ $article->author->name }}</a></address>
            <a href="{{route('article',['articleId' => $article->id])}}" class="article__comments"> <span class="article__comments-counter">{{ $article->comments()->count() }}</span> Comments</a>
        </div>

       
    </div>
</div>
        
