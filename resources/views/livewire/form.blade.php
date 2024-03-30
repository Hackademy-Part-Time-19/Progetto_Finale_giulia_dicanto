<div>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h2 class="display-1">
                Inserisci un nuovo post
            </h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col 12 col-md-8"></div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="" class="card p-5 shadow" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}"
                        wire:model.change="title">
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label"> Tempo - Livello: Principiante, Intermedio,
                        Avanzato</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle"
                        value="{{ old('subtitle') }}" wire:model.change="subtitle">
                </div>

                {{-- <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div> --}}

                {{-- <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>

                    <select name="category" id="category" class="form-control text-capitalize">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            <input type="checkbox" class="btn-check" id="btncheck{{$category->id}}" autocomplete="off" name="categories[]" value="{{$category->id}}">
                            <label class="btn btn-outline-primary" for="btncheck{{$category->id}}">{{$category->name}}</label>
                        @endforeach
                    </select>

                </div> --}}

                {{-- <div class="mb-3">
                    <label for="body" class="form-label">Testo:</label>
                    <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{ old('body') }}</textarea>
                </div> --}}

                <div class="mt-2 d-flex justify-content-center">
                    <button class="btn btn-info">Inserisci articolo</button>
                </div>
            </form>
        </div>