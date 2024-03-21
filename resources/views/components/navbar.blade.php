<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: #dddfde solid 1px; width: 100%;">

    <!-- Left nav/link -->
    <div class="container-fluid p-1" style="margin-left: 40px; margin-right: 40px;">
        <img class="d-inline-block align-text-top" style="height: 85px; margin-right: 15px;"
            src="./logo/Musicartacademy-logo-white-264x264.png" alt="logo the aulab post">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: rgb(48, 46, 46);" href="#" role="button"
                        data-bs-toggle="dropdown">AULibrary</a>
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
            <div class="container-fluid justify-content-end col-md-3">

                <div style="display: flex; align-items: center; justify-content: end;">

                    <form style="align-items: center; justify-content: center;" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button type="summit" class="btn btn-outline-secondary">Search</button>
                    </form>
                </div>
            </div>
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Benvenuto {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                @csrf
                                <button type="submit" class="btn nav-link">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endauth
            @guest
            <div style="flex:0.5; display: flex; align-items: center; justify-content: center;">
              <div style="margin: 5px">
                  <button stye="flex:1; padding: 5px; margin-right: 5px;" type="button"
                      class="btn btn-secondary"><a class="dropdown-item" href="{{route('login')}}">Login</a></button>
              </div>
              <div>
                  <button stye="flex:1; padding: 5px; margin- left: 5px;" type="button"
                      class="btn btn-info d-flex"><a class="dropdown-item" href="{{route('register')}}">Registrati</a></button>

              </div>
          </div>
            @endguest

            
        </div>
</nav>
