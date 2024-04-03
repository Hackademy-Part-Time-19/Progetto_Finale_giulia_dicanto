<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
// use Livewire\Attributes\Url;
// use Livewire\WithPagination;

class Search extends Component
{
    // use WithPagination;
     // #[Url]
    public $posts;
    public $search ="";
    public function render()
    {  if ($this->search == "") {
         $this->posts = Post::all();
    } else {
        $this->posts= Post::where('name', 'like', '%' . $this->search . '%')->orWhere('body','like', '%' . $this->search . '%')->orderBy ('created_at','DESC')->get();
    }

        return view('livewire.search');
    }

}
