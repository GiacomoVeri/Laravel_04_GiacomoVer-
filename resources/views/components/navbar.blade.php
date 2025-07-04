<nav class="navbar navbar-expand-lg bg-primary-subtle rounded-bottom shadow">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="{{ route('home') }}">Laravel 04</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Chi siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.all') }}">Articoli</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-5" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-primary rounded-5" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>