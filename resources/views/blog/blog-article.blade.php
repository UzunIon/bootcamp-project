
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
            <a href="{{route('article',['articleId' => $article->id])}}" class="article__comments"><i class="far fa-comment-dots"></i> <span class="article__comments-counter">{{ $article->comments()->count() }}</span></a>
        </div>
    </div>
</div>
        
