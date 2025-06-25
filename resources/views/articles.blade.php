<x-main-layout>
    <h1 class="display-4 text-primary text-center m-5">I nostri articoli</h1>

    <div class="container">
        <div class="row">
            @forelse($articles as $article)
            <x-card :article="$article" />
            @empty
            <p class="text-center text-primary m-5"></p>
            @endforelse
        </div>
    </div>


</x-main-layout>