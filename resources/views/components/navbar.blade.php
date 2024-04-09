<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: #dddfde solid 1px; width: 100%;">

    <!-- Left nav/link -->
    <div class="container-fluid p-1" style="margin-left: 40px; margin-right: 40px;">
        <a href="{{ route('homepage') }}">
            <img class="d-inline-block align-text-top" style="height: 85px; margin-right: 15px;"
                src="/img/The-Aulab-Post-logobn-320x320.png" alt="logo the aulab post"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: rgb(48, 46, 46);" href="{{ route('homepage') }}"
                        role="button" data-bs-toggle="dropdown">TheAulabPOST</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Chi Siamo</a></li>
                        <li><a class="dropdown-item" href="#">Mission</a></li>
                    </ul>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: rgb(48, 46, 46);" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Category1</a></li>
                        <li><a class="dropdown-item" href="#">Category2</a></li>
                        <li><a class="dropdown-item" href="#">Category3</a></li>
                        <li><a class="dropdown-item" href="#">Category4</a></li>
                    </ul>
                </li> --}}
                <li> <a class="nav-link" href="{{ route('article.index') }}" style="color: rgb(48, 46, 46);">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: rgb(48, 46, 46);" href="#">Eventi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: rgb(48, 46, 46);" href="#">Contatti</a>
                </li>
            </ul>

            <!-- Right nav/link -->
            @auth

                <div class="d-flex">


                    <div class="container col-8 d-flex justify-content-between align-items-center">
                        <a class="nav-link" href="#" role="button">
                            Ciao {{ Auth::user()->name }}
                        </a>
                        @if (Auth::user()->is_admin)
                          
                                <a class="nav-link" href="{{ route('admin.dashboard') }}" style="margin-left:5px"><span
                                    class="color_purple" style="font-weight: 500;">Dashboard</span></a>
                            

                         @if (Auth::user()->is_revisor)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('revisor.dashboard') }}" style="margin-left:5px"><span
                                        class="color_purple" style="font-weight: 500;">Dashboard | Revisore</span></a>
                                </li>
                            @endif
                        @else
                            <a class="nav-link" href="{{ route('article.create') }}" style="margin-left:5px"><span
                                    class="color_purple" style="font-weight: 500;">Crea il tuo post</span></a>
                            <form action="{{ route('logout') }}" id="logout-form" method="POST">

                                <a class="nav-link" href="{{ route('careers') }}" style="margin-left:5px"><span
                                        class="color_purple" style="font-weight: 500;">Lavora con noi</span></a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @endif
                    </div>

                    @csrf
                    <div class="col-6 d-flex justify-content-center align-items-center">


                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16" style="margin-right:15px;">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>

                        <button type="submit" class="btn nav-link text-white"
                            style="margin:5px; padding:5px; background-color:#2a2a2a">Logout <svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                style="margin-left:5px; margin-top:0px" fill="currentColor" class="bi bi-box-arrow-right"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg></button>
                        </form>
                    </div>
                </div>
            @endauth


            @guest
                <div class="col-6 d-flex justify-content-center align-items-center">

                    <form action="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16" style="margin-right:15px;">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </form>
                    <div style="flex:0.5; display: flex; align-items: center; justify-content: start;">
                        <button class="button-login" style="margin: 0.2em 0.2em;">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        </button>


                        <button class="button-signup" style="margin: 0.2em 0.2em;">
                            <a class="dropdown-item" href="{{ route('register') }}">Sign Up</a>
                        </button>
                    </div>
                @endguest


            </div>
</nav>
