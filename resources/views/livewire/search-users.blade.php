<div>
    <div>
        <div class="container-fluid">
            <div class="row">
                {{-- <button type="button" wire:click="delete" wire:confirm="Are you sure you want to delete this post?">
                    Delete post
                </button> --}}
                <div>
                    <label for="search">Cerca</label>
                    <input type="text" wire:model.live="search" id="search">
                </div>
    
                @foreach ($post as $user)
                    <div class="card" style="width: 18rem;" wire:key="{{ $user->id }}">
    
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->title }}</h5>
                            <p class="card-text">{{ $user->body }}</p>
    
                        </div>
                    </div>
                @endforeach
                {{ $post->links() }}
            </div>
        </div>
    
    
    </div>
</div>
