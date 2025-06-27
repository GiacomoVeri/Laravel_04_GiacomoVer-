<x-main-layout t="Dettaglio articolo">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img src="{{ $article['image'] }}" alt="" class="rounded-4 mt-5 shadow">
            </div>
            <div class="col-7">
                <h4 class="text-center display-5 m-5">{{ $article['title'] }}</h4>
                <p class="text-center">{{ $article['description'] }}</p>
            </div>
        </div>
    </div>
</x-main-layout>