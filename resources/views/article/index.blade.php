<x-layout.main>
    <div class="container-fluid p-5 text-center" style="background: #E5E0FE; color:#f4f7f6;">
        <div class="row justify-content-center">
            <h1 class="display">Tutti gli articoli</h1>

            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card 
                    :title="$article->title" 
                    :subtitle="$article->subtitle" 
                    :image="$article->image" 
                    {{-- :category="$article->category->name"  --}}
                    :data="$article->created_at->format('d/m/Y')"
                    :user="$article->user->name" 
                    :url="route('article.show', compact('article'))">
                </x-card>
                </div>


            @empty
                <p>NON CI SONO ARTICOLI</p>
            @endforelse
        </div>
    </div>
  
    </div>
</x-layout.main>
