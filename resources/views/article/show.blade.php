<x-layouts.main>
    <h1>Sono l'elenco provvisorio</h1>

    <div class="container">
        
        <div class="card">
            <div class="card-body">
                <p> {{$article->name}}</p>
                <div class="container">
                    <div class="row">
                        <p>
                            {{$article->time}}
                        </p>
                        <p> {{$article->body}}</p>
                    </div>
                </div>
                
                <form action="{{route('article.destroy',['article'=>$article->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella</button></form>
            </div>
          </div>
          
          

    </div>

</x-layouts.main>