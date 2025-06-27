<x-main-layout t="Home">
    <h1 class="text-center m-5 text-primary">I nostri ultimi articoli</h1>
    <div class="container">
        <div class="row justify-content-center">
            @forelse($articles as $article)
            <x-card :article="$article" />
            @empty
            <p class="text-center text-warning">non ci sono articoli disponibili</p>
            @endforelse
            <div class="col-4 text-center">
                <a href="" class="btn btn-primary rounded-5">Tutti gli articoli</a>
            </div>
        </div>
    </div>

</x-main-layout>