<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $users;

    // #[Url]
    public $search ="";
    public function render()
    {  if ($this->search == "") {
         $this->users = User::all();
    } else {
        $this->users= User::where('name', 'like', '%' . $this->search . '%')->orderBy ('created_at','DESC')->get();
    }
    
    // {
    //     if ($this->search == "") {
    //         $this->users = Post::paginate(4);
    //     } else {
    //         $this->users= Post::where('user_id', 'like', '%' . $this->search . '%')->orWhere('body','like', '%' . $this->search . '%')->orderBy ('created_at','DESC');
    //     }

        return view('livewire.search', ['post'=>Post::paginate(4)]);
    }

}
