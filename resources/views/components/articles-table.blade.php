<table class="table table-striped table-hover">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azioni</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->user->name }}</td>
                <td>
                    @if (is_null($article->is_accepted))
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info">Leggi</a>
                    @else
                        <form action="{{ route('revisor.undoArticle', compact('article')) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-info">Riporta in revisione</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
