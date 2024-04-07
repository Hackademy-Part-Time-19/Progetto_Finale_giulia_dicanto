<x-layout.main>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h2 class="display-1">
                Bentornato, Admin
            </h2>
        </div>
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
                <x-request-table :roleRequests="$adminRequests" role= "amministratore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <h2>Richieste per il ruolo di <span class="color_purple">Revisore</span></h2>
                <x-request-table :roleRequests="$revisorRequests" role= "revisore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <h2>Richieste per il ruolo di <span class="color_purple">Redattore</span></h2>
                <x-request-table :roleRequests="$writerRequests" role= "redattore" />
            </div>
        </div>
    </div>

    </x-layout>
