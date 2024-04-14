<x-layout.main>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <x-carousel></x-carousel>

    </div>
    <div class="nav-scroller py-1 mb-2" style="margin-top: 20px">
        <nav class="nav d-flex justify-content-center">

            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Full Body']) }}">Full Body</a>
            <a class="p-2 text-muted filter-btn" href="{{ route('article.byCategory', ['category' => 'Abs']) }}">Abs</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Booty']) }}">Booty</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Upper Body']) }}">Upper Body</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Legs']) }}">Legs</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Shape&Tone']) }}">Shape&Tone</a>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-3 d-flex" style="padding:1.8em; margin-top: 15px;">
            <h6>
                News and Updates
            </h6>
            <h1>
                Continua il tuo viaggio nel <span class="color_purple">Fitness</span>
            </h1>
        </div>

        <div class="row justify-content-center">

            <div class="row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-md-3">
                        <x-card :tags="$article->tags" :title="$article->title" :subtitle="$article->subtitle" :image="$article->image"
                            :category="$article->category->name" :data="$article->created_at->format('d/m/Y')" :user="$article->user->name" :url="route('article.show', compact('article'))" :urlCategory="route('article.byCategory', ['category' => $article->category->id])" />

                    </div>
                @endforeach
            </div>

            <div class="row justify-content-left">

                <button class="button-call" style="margin-inline-start: 20px">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                    </svg>
                    <div class="text">
                        Scopri di più
                    </div>
                </button>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-3 d-flex" style="padding:1.8em; margin-top: 15px;">
            <h6>
                Special Program
            </h6>
            <h1>
                Allenati con i migliori <span class="color_purple">Coaches</span>
            </h1>
        </div>
    </div>
    <div class="row justify-content-center mb-3 d-flex;" style="padding:1em;">

        {{-- #1 --}}
        <div class="card-coaches">
            <div class="card-content">
                <div class="card-top">
                    <span class="card-title">01.</span>
                    <p>Hyrox.</p>
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
            <div class="card-bottom border-top" style="margin-top:5px; padding-top:5px;">
                <p>by Glennis Balsbaugh</p>

                <p>40 EUR/m</p>

            </div>
        </div>

        {{-- #2 --}}
        <div class="card-coaches">
            <div class="card-content">
                <div class="card-top">
                    <span class="card-title">02.</span>
                    <p>Triathlon.</p>
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
            <div class="card-bottom border-top" style="margin-top:5px; padding-top:5px;">
                <p>by Marco Lariz</p>

                <p>60 EUR/m</p>

            </div>
        </div>
        {{-- #3 --}}
        <div class="card-coaches">
            <div class="card-content">
                <div class="card-top">
                    <span class="card-title">03.</span>
                    <p>Functional Training.</p>
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
            <div class="card-bottom border-top" style="margin-top:5px; padding-top:5px;">
                <p>by Michel Wirtanen</p>

                <p>50 EUR/m</p>

            </div>
        </div>

        {{-- #4 --}}
        <div class="card-coaches">
            <div class="card-content">
                <div class="card-top">
                    <span class="card-title">03.</span>
                    <p>Yoga.</p>
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
            <div class="card-bottom border-top" style="margin-top:5px; padding-top:5px;">
                <p>by Alysia Derome</p>

                <p>30 EUR/m</p>

            </div>
        </div>

    </div>

    <div class="container" style="border-radius: 2em">

        <div class="row my-5 d-flex" style="border-radius: 2em; background: #f3f3f3;">

            <div class="container col-sm-8 justify-content-center align-items-center"
                style="padding: 3em 0em 0em 3em; border-radius: 2em; background: #f3f3f3; height: 27em;">
                <div>
                    <h1>
                        Make it <span class="color_purple">Easy</span>
                    </h1>
                    <p class="my-4">
                        Contattaci oggi stesso per raggiungere i tuoi obiettivi con un allenamento personalizzato. </br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <button class="buttondark my-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                        </svg>
                        <div class="text">
                            Scopri di più
                        </div>
                    </button>

                </div>
            </div>

            <img class="col-sm-4" alt="Responsive image" src="./img/Healthy habit-pana.png"
                data-holder-rendered="true" style="height=150px;background: #f3f3f3; border-radius:2em">

        </div>
    </div>
</x-layout.main>

<x-layout.footer></x-layout.footer>
