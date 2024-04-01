<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;

class Search extends Component
{
    public $users;

    #[Url]
    public $search ="";
    public function render()
    {  if ($this->search == "") {
         $this->users = User::all();
    } else {
        $this->users= User::where('name', 'like', '%' . $this->search . '%')->orderBy ('created_at','DESC')->get();
    }
        // if ($this->search == "") {
        //     $this->users = Post::all();
        // } else {
        //     $this->users= Post::where('name', 'like', '%' . $this->search . '%')-> get();
        // }

        return view('livewire.search');
    }
}
