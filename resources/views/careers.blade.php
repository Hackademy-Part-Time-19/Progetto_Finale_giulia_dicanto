<x-layout.main>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h2 class="display-1">
                Lavora con noi
            </h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>lavora come amministratore </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore ad consequatur temporibus amet culpa
                    asperiores dolor, qui nisi, impedit inventore voluptate quibusdam eaque. Corporis, ducimus! Vel
                    suscipit obcaecati repudiandae quisquam.</p>

                <h2>lavora come revisore </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore ad consequatur temporibus amet culpa
                    asperiores dolor, qui nisi, impedit inventore voluptate quibusdam eaque. Corporis, ducimus! Vel
                    suscipit obcaecati repudiandae quisquam.</p>

                <h2>lavora come redattore </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore ad consequatur temporibus amet culpa
                    asperiores dolor, qui nisi, impedit inventore voluptate quibusdam eaque. Corporis, ducimus! Vel
                    suscipit obcaecati repudiandae quisquam.</p>
            </div>

            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="" method="" class="p-5"></form>
                @csrf
                <div class="mb-3">
                    <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>

                    <select name="role" id="role" class = "form-control">
                        <option value="">Scegli qui</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    {{-- <input type="email" name="email" class="form-control" id="email"
                        value="{{ old('email') ?? Auth::user()->email }}"> --}}
                        <input type="email" name="email" class="form-control" id="email"
                        value="{{ old('email') ?? (Auth::user() ? Auth::user()->email :'')}}">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
                </div>
                <div class="mt-2">
                    <button class="btn btn-info"> Invia la tua candidatura</button>
                </div>
            </div>
        </div>
    </div>
</x-layout.main>
