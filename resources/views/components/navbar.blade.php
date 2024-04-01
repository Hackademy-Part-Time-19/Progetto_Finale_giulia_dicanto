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
                    <a class="nav-link dropdown-toggle" style="color: rgb(48, 46, 46);" href="{{ route('homepage') }}" role="button"
                        data-bs-toggle="dropdown">TheAulabPOST</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Chi Siamo</a></li>
                        <li><a class="dropdown-item" href="#">Mission</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: rgb(48, 46, 46);" href="#" role="button"
                        data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Category1</a></li>
                        <li><a class="dropdown-item" href="#">Category2</a></li>
                        <li><a class="dropdown-item" href="#">Category3</a></li>
                        <li><a class="dropdown-item" href="#">Category4</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color: rgb(48, 46, 46);" href="#">Eventi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: rgb(48, 46, 46);" href="#">Contatti</a>
                </li>
            </ul>

            <!-- Right nav/link -->
            <div class="container justify-content-end col-md-3">

                    <form style="align-items: start; justify-content: end;" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
            
            </div>

            @auth
                <div class="d-flex">
                    

                    <div class="container">
                        <a class="nav-link" href="#" role="button">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <a class="nav-link" href="{{ route('article.create') }}"><button type="submit" class="btn nav-link"
                                style="padding:2px; border: #CEFF68;">
                            </button>Crea il tuo Post</a>

                        <a class="nav-link" href="{{ route('article.index') }}"><button type="submit" class="btn nav-link"
                                style="padding:2px; border: #CEFF68;">
                            </button>I miei Articoli</a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST">


                    </div>
                    @csrf
                    <div class="justify-content-center align-item-center">
                    <button type="submit" class="btn nav-link text-white"
                        style="margin:5px; padding:5px; background-color:#2a2a2a">Logout</button>
                    </form>
                </div>
                </div>
            @endauth


            @guest
                <div style="flex:0.5; display: flex; align-items: center; justify-content: start;">
                        <button class="button-login" style="margin: 0.2em 0.2em;">
                            <a class="dropdown-item"
                                href="{{ route('login') }}">Login</a>
                        </button>
                    
                   
                        <button class="button-signup" style="margin: 0.2em 0.2em;">
                            <a class="dropdown-item"
                                href="{{ route('register') }}">Sign Up</a>
                        </button>
                </div>
            @endguest


        </div>
</nav>
