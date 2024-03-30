<x-layout.main>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h2 class="display-1">
                The Aulab Post
            </h2>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <x-carousel></x-carousel>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
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
            @endforeach
        </div>
    </div>
</x-layout.main>

<x-layout.footer>
    
</x-layout.footer>
