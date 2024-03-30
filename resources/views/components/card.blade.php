<div class="card">
    <img src="{{$image}}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{$subtitle}}</p>
        <p class="small text-muted d-flex justify-content-center align-items-center">{{$category}}</p>
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">

        Creato il {{$data}} da {{$user}}
        <a href="{{$url}}" class="btn btn-info">Leggi</a>

    </div>
</div>