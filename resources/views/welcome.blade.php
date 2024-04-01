<x-layout.main>
    {{-- <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h2 class="display-1">
                The Aulab Post
            </h2>
        </div>
    </div> --}}

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    <x-carousel></x-carousel>
    {{-- <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card 
                    :title="$article->title", 
                    :subtitle="$article->subtitle",
                    :image="$article->image",
                    :category="$article->category->name",
                    :data="$article->created_at->format('d/m/Y')",
                    :user="$article->user->name" :url="route('article.show', compact('article'))">
                    </x-card>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="row justify-content-center" style="padding:1.8em;">
        <h6>
            News and Updates
        </h6>
        <h1>
            Continua il tuo viaggio nel <span class="color_purple">Fitness</span>
        </h1>
    </div>
    <div class="row text-center justify-content-center">
        <livewire:search />
        <div style="diplay-flex; background-color: #CEFF68; width:40%; margin-top:10px; border-radius:2em;">
            <a href="#" class="btn btn-info">Scopri di più</a>
        </div>
    </div>


    <div class="row justify-content-center" style="padding:1.8em;">
        <h6>
            Special Program
        </h6>
        <h1>
            Allenati con i migliori <span class="color_purple">Coaches</span>
        </h1>
    </div>
    <div class="row justify-content-center text-left mb-3 display-flex"
        style="background: #2a2a2a; color:#F8F9FA; height: 30em">
        <h3 style="padding:1em; color:#F8F9FA;">Card-coaches</h3>
        {{-- #1 --}}
        <div class="card-coaches">
            <div class="card-content">
                <div class="card-top">
                    <span class="card-title">01.</span>
                    <p>Lightning.</p>
                </div>
                <div class="card-bottom">
                    <p>Hover Me?</p>
                    <svg width="32" viewBox="0 -960 960 960" height="32" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M226-160q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19ZM226-414q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19ZM226-668q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="card-image">
                <svg width="48" viewBox="0 -960 960 960" height="48" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m393-165 279-335H492l36-286-253 366h154l-36 255Zm-73 85 40-280H160l360-520h80l-40 320h240L400-80h-80Zm153-395Z">
                    </path>
                </svg>
            </div>
        </div>
        {{-- #2 --}}
        <div class="card-coaches">
            <div class="card-content">
                <div class="card-top">
                    <span class="card-title">01.</span>
                    <p>Lightning.</p>
                </div>
                <div class="card-bottom">
                    <p>Hover Me?</p>
                    <svg width="32" viewBox="0 -960 960 960" height="32" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M226-160q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19ZM226-414q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19ZM226-668q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="card-image">
                <svg width="48" viewBox="0 -960 960 960" height="48" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m393-165 279-335H492l36-286-253 366h154l-36 255Zm-73 85 40-280H160l360-520h80l-40 320h240L400-80h-80Zm153-395Z">
                    </path>
                </svg>
            </div>
        </div>
        {{-- #3 --}}
        <div class="card-coaches">
            <div class="card-content">
                <div class="card-top">
                    <span class="card-title">01.</span>
                    <p>Lightning.</p>
                </div>
                <div class="card-bottom">
                    <p>Hover Me?</p>
                    <svg width="32" viewBox="0 -960 960 960" height="32" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M226-160q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19ZM226-414q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19ZM226-668q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Zm254 0q-28 0-47-19t-19-47q0-28 19-47t47-19q28 0 47 19t19 47q0 28-19 47t-47 19Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="card-image">
                <svg width="48" viewBox="0 -960 960 960" height="48" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m393-165 279-335H492l36-286-253 366h154l-36 255Zm-73 85 40-280H160l360-520h80l-40 320h240L400-80h-80Zm153-395Z">
                    </path>
                </svg>
            </div>
        </div>
        
    </div>


</x-layout.main>
