<div class="row justify-content-center" style="maring-top:5px; padding: 1.8em;">
    <div class="container">
        <form class="container d-flex border">
            <input class="form-control me-2" type="search" placeholder="Cerca Autore" aria-label="Search"
                wire:model.change="search" id="search">
            <button type="summit" class="btn btn-info" style="width: 150 px">Cerca</button>
        </form>

        <div class="row" style="maring-top:5px;">
            @foreach ($users as $user)
             <div class="col-12  col-md-4 col-lg-3">
                    <div class="container-fluid text-center d-flex" style="margin:5px;">
                        <div class="card mb-3" style="width: 25rem; margin:5px;" wire:key="{{ $user->name }}">
                            <img class="card-img-top rounded-top" src="..." alt="Card image">

                            <div class="card-body">
                                <p class="card-text"><small>Full-Body</small></p>
                                <h5 class="card-title">{{ $user->name }}</h5>
                                <p class="card-text">{{ $user->emails }}</p>
                                <div class="card-footer text-muted d-flex justify-content-center">
                                    <a href="#" class="btn btn-info">Leggi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>

</div>
