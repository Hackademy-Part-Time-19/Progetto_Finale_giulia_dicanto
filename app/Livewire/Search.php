<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $users;
    public $search ="";
    public function render()
    {
        $this->users= User::where('name', 'like', '%' . $this->search . '%')->get();
        // if ($this->search == "") {
        //     $this->users = Post::all();
        // } else {
        //     $this->users= Post::where('name', 'like', '%' . $this->search . '%')-> get();
        // }

        return view('livewire.search');
    }
}
