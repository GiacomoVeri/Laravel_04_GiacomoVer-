<div class="col-4">
    <div class="card shadow mb-3">
        <img src="{{ $article['image'] }}{{ $article['id'] }}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $article['title'] }}</h5>
            <p class="card-text text-truncate">{{ $article['description'] }}</p>
            <a href="{{ route('article.show', $article['id']) }}" class="btn btn-primary">Leggi di più</a>
        </div>
    </div>
</div>