<div class="card" style="margin:0.6em;">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body">
        @if ($category)
            <a href="{{ $urlCategory }}"
                class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
        @else
        <p class="small text-muted text-capitalize">Non categorizzato</p>
        @endif


        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>

        @if ($tags)

            <p class="small text-capitalize">
                @foreach ($tags as $tag)
                    <span class="color_purple">#{{ $tag->name }}</span>
                @endforeach
            </p>
        @endif

    </div>
    <div class="card-footer text-muted">
        <p><small> Creato il {{ $data }} da {{ $user }}</small></p>
        <a href="{{ $url }}" class="btn btn-info">Leggi</a>

    </div>
</div>
