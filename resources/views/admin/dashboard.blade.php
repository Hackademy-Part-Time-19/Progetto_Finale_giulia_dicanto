<x-layout.main>
    <div class=" d-flex container-fluid p-5 bg-dark text-center justify-content-center">
        <div class="row justify-content-center justify-content-center align-items-center" style="margin: padding: 5px">
            <h2 class="display-1 text-white">
                Bentornato, Admin
            </h2>
        </div>
        
            {{-- <div class="d-flex text-white justify-content-center align-items-center" style="margin: 2em; border: solid white; padding: 5px">
                <span>Matheo Peterson</span>
                <span>
                    <img style="border-radius:100%; margin-left: 2em" src="https://assets.codepen.io/285131/almeria-avatar.jpeg" />
                </span>
            </div> --}}

        
    </div>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <h2>Richieste per il ruolo di <span class="color_purple">Amministratore</span></h2>
                <x-requests-table :roleRequests="$adminRequests" role= "amministratore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <h2>Richieste per il ruolo di <span class="color_purple">Revisore</span></h2>
                <x-requests-table :roleRequests="$revisorRequests" role= "revisore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <h2>Richieste per il ruolo di <span class="color_purple">Redattore</span></h2>
                <x-requests-table :roleRequests="$writerRequests" role= "redattore" />
            </div>
        </div>
    </div>

   

</x-layout.main>
