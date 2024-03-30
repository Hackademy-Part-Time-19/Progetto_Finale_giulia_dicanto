<div>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h2 class="display-1">
                Inserisci un nuovo post
            </h2>
            <div>
                <label for="search">Cerca</label>
                <input type="text" wire.model="search" id="search">
            </div>

            @foreach ($users as $user)
                <div>
                    <div class="card" style="width: 18rem;" wire:key="{{$user->name}}">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                       
                        <div class="card-body">
                            <h5 class="card-title">{{$form->$title }}</h5>
                            <p class="card-text">{{ $form->$subtitle }}</p>
                            <div class="card-footer text-muted d-flex justify-content-center align-items-center">
                                Creato il {{ $data }} da {{$user->name}}
                                <a href="{{ $url }}" class="btn btn-info">Leggi</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
