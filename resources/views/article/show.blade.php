<x-layout.main>
    <div class="container-fluid p-5 text-center text-white" style="background: #C0B6FF;">

        <div class="row justify-content-center">
            <h1 class="display-1">
                {{ $article->title }}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="row">
                <div class="container-fluid justify-content-center">
                    <nav aria-label="breadcrumb" class="container justify-content-end align-items-center m-5">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route ('homepage')}}"><span class="color_grey">Home</span></a></li>
                            <li class="breadcrumb-item text-muted" aria-current="page"><span class="color_grey">Category</span></li>
                            <li class="breadcrumb-item text-muted" aria-current="page"><span class="color_grey">{{$article->category->name}}</span></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="col-12 col-md-8">
                <img src="{{ asset($article->getUrl(1500 , 1000))}}" alt="immagine articolo" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3 text-muted fst-italic"></div>
                    <p>Creato da {{ $article->user->name }}, il {{ $article->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            <hr>

            <p>{{ $article->body }}</p>
            @auth 

            @if (Auth::user()->is_revisor)
                <div class="d-flex justify-content-end">
                    <form action="{{ route('revisor.acceptArticle', compact('article')) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-info" style="margin:10px">Accetta l'articolo</button>
                    </form>

                    <form action="{{ route('revisor.rejectArticle', compact('article')) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-info" style="margin:10px">Rifiuta l'articolo</button>
                    </form>

                </div>

            </div>
@endif
        @endauth
    </div>

</x-layout.main>
<x-layout.footer></x-layout.footer>
