<x-layout.main>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif


    <div class="row d-flex my-5 align-items-end justify-content-center">

        <div class="container col-sm-8" style="padding-left:25px">

            <nav id="navbar-dashboard" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">Post</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#revisione"><span class="color_purple">da Revisionare</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pubblicati"><span class="color_purple">Pubblicati</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#eliminati"><span class="color_purple">Respinti</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#propri"><span class="color_purple">Scritti</span></a>
                    </li>

                </ul>
            </nav>

        </div>

        <div class="card-time container col-sm-4  justify-content-center align-items-center">
            <p class="time-text"><span>11:11</span><span class="time-sub-text">PM</span></p>
            <p class="day-text">Wednesday, June 15th</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" stroke-width="0"
                fill="currentColor" stroke="currentColor" class="moon">
                <path
                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                </path>
                <path
                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                </path>
            </svg>
        </div>

    </div>
    <div data-spy="scroll" data-target="#navbar-dashboard" data-offset="0">
        <div id="revisione" class="container my-5">
            <div class="row justify-content-center">

                <div class="col-12">
                    <div class="row">
                        <h2 style="color:#C0B6FF">Post da revisionare</h2>
                    </div>
                    <x-articles-table :articles="$unrevisionedArticles" />
                </div>
            </div>
        </div>

        <div id="pubblicati" class="container my-5">
            <div class="row justify-content-center">

                <div class="col-12">

                    <h2 style="color:#C0B6FF">Post pubblicati</h2>
                    <x-articles-table :articles="$acceptedArticles" />
                </div>
            </div>
        </div>

        <div id="eliminati" class="container my-5">
            <div class="row justify-content-center">

                <div class="col-12">
                    <h2 style="color:#C0B6FF">Post respinti </h2>
                    <x-articles-table :articles="$rejectedArticles" />
                </div>
            </div>
        </div>

        <div id="propri" class="container my-5">
            <div class="row justify-content-center">

                <div class="col-12">
                    <h2 style="color:#C0B6FF">I miei post</h2>
                    <x-writer-articles-table :articles="Auth::user()->articles" />
                </div>
            </div>
        </div>

</x-layout.main>
