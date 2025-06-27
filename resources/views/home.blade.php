<x-main-layout t="Home">
    <h1 class="text-center m-5 text-primary">I nostri ultimi articoli</h1>
    <div class="container">
        <div class="row">
            @forelse($articles as $article)
            <x-card :article="$article" />
            @empty
            <p class="text-center text-warning">non ci sono articoli disponibili</p>
            @endforelse

        </div>
    </div>

</x-main-layout>