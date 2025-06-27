<x-main-layout t="Dettaglio articolo">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <img src="{{ $article['image'] }}" alt="" class="rounded-4 mt-5 shadow">
            </div>
            <div class="col-7 bg-primary-subtle mt-5 rounded-4 shadow">
                <h3 class="text-center display-5 m-5">{{ $article['title'] }}</h3>
                <h5 class="text-center mb-5">{{ $article['description'] }}</h5>
                <p class="text-center">{{ $article['content'] }}</p>
            </div>
            <a href="{{ route('articles.all') }}" class="btn btn-primary col-2 mt-5 shadow rounded-5">Torna agli articoli</a>
        </div>
    </div>
</x-main-layout>