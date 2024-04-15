<x-layout.main>
    <div class="container-fluid p-5 text-center text-white" style="background: #C0B6FF;">
        <div class="row justify-content-center">
            <h2 class="display-1">
                Registrati
            </h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {[$error]}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card p-5 shadow" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="name" class="form-control" id="username"
                            value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"> Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                    </div>

                    <div class="mb-3">
                        <button class="btn" style="background-color: #CEFF68;">Sign Up</button>
                        <p class="small-mt-2">Già registrato? <a href="{{ route('login') }}"></a>Clicca qui</p>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-layout.main>
