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
                <img src="{{ Storage:: url($article->image) }}" alt="" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3 text-muted fst-italic"></div>
                    <p>Creato da {{ $article->user->name }}, il {{ $article->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            <hr>

            <p>{{$article->body}}</p>
            <div class="text-center">
                <a href="{{route('article.index')}}" class="btn bg-info text-white my-5"> Torna indietro</a>
            </div>

        </div>
    </div>

</x-layout.main>