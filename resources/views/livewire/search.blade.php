<div class="row justify-content-center" style="maring-top:5px; background: #2a2a2a; padding: 15px;">
    <div class="container-fluid">
    <div calss="row">
        <label for="search" class="text-white">Cerca</label>
        <input type="text" wire:model.change="search" id="search">
    </div>
<div class="container-fluid" style="maring-top:5px; padding: 15px;">
    @foreach ($users as $user)
    <div>
        <div class="card" style="width: 25rem; margin:5px;" wire:key="{{ $user->name }}">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}

            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">{{ $user->email }}</p>
                <div class="card-footer text-muted d-flex justify-content-center">
                    <a href="#" class="btn btn-info">Leggi</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
  

</div>

</div>
