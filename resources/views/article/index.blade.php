<x-layout.main>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h2 class="display-1">
                Tutti gli articoli
            </h2>
        </div>
    </div>

    <div class="row my-5 justify-content-center" style="padding:1.8em; margin-left: 1em;">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card 
                    :tags="$article->tag" 
                    :title="$article->title" 
                    :subtitle="$article->subtitle" 
                    :image="$article->image" 
                    :category="$article->category->name"
                    :data="$article->created_at->format('d/m/Y')" 
                    :user="$article->user->name" 
                    :url="route('article.show', compact('article'))" 
                    :urlCategory="route('article.byCategory', ['category' => $article->category->id])" />

                </div>
            @endforeach
        </div>
    </div>
</x-layout.main>
