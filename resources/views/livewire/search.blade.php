<div class="container-fluid">
            <div calss="row">
                <label for="search">Cerca</label>
                <input type="text" wire.model="search" id="search">
            </div>

            @foreach ($users as $user)
                <div>
                    <div class="card" style="width: 18rem;" wire:key="{{$user->name}}">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                       
                        <div class="card-body">
                            <h5 class="card-title">{{$user->name}}</h5>
                            <p class="card-text">{{$user->email}}</p>
                            <div class="card-footer text-muted d-flex justify-content-center align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
