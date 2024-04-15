<x-layout.main>
    <div class="container-fluid p-5 text-center text-white" style="background: #C0B6FF;">
        <div class="row justify-content-center">
            <h2 class="display-1">
                Tutti gli articoli
            </h2>
        </div>
    </div>
    <div class="nav-scroller m-5" style="margin-top: 20px">
        <nav class="nav d-flex justify-content-center">
            <a class="p-2 text-muted filter-btn" href="{{ route('article.index') }}">All</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Full Body']) }}">Full Body</a>
            <a class="p-2 text-muted filter-btn" href="{{ route('article.byCategory', ['category' => 'Abs']) }}">Abs</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Booty']) }}">Booty</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Upper Body']) }}">Upper Body</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Legs']) }}">Legs</a>
            <a class="p-2 text-muted filter-btn"
                href="{{ route('article.byCategory', ['category' => 'Shape&Tone']) }}">Shape&Tone</a>

        </nav>
    </div>
    <div class="row my-5 justify-content-center" style="padding:1.8em; margin-left: 1em;">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :tags="$article->tags" :title="$article->title" :subtitle="$article->subtitle" :image="$article->image" :category="$article->category->name"
                        :data="$article->created_at->format('d/m/Y')" :user="$article->user->name" :url="route('article.show', compact('article'))" :urlCategory="route('article.byCategory', ['category' => $article->category->id])" />

                </div>
            @endforeach
        </div>
    </div>
</x-layout.main>
