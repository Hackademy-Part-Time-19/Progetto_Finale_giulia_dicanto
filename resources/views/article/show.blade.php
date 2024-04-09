<x-layout.main>
    <div class="container-fluid p-5 bg-info text-senza icenter text-white">

        <div class="row justify-content-center">
            <h1 class="display-1">
                {{ $article->title }}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">


            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($article->image) }}" alt="immagine articolo" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3 text-muted fst-italic"></div>
                    <p>Creato da {{ $article->user->name }}, il {{ $article->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            <hr>

            <p>{{ $article->body }}</p>
            <div class="text-center">
                <a href="{{ route('homepage') }}" class="btn bg-info text-white my-5"> Torna indietro</a>
            </div>
            {{-- <div class="d-flex justify-content-between">
                @if (Auth::user() && Auth::user()->is_revisor)
                    <form action="{{ route('revisor.acceptArticle', compact('article')) }}" method="POST">
                        @csrf
                        <button class="btn btn-info">Accetta l'articolo</button>
                    </form>

                    <form action="{{ route('revisor.rejectArticle', compact('article')) }}" method="POST">
                        @csrf
                        <button class="btn btn-info">Rifiuta l'articolo</button>
                    </form>
                @endif
            </div> --}}

        </div>
    </div>

</x-layout.main>
