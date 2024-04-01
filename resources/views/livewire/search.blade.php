<div class="row justify-content-center" style="maring-top:5px; background:#C0B6FF; padding: 15px;">
    <div class="container-fluid">
        <form style="align-items: center; justify-content: center;" class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" wire:model.change="search" id="search">
            <button type="summit" class="btn btn-info">Search</button>
        </form>

<div class="container-fluid" style="maring-top:5px; padding: 15px;">
    @foreach ($users as $user)
    <div>
        <div class="card" style="width: 25rem; margin:5px;" wire:key="{{ $user->id }}">
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
