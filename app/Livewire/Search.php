<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $users;
    public $search="Cerca";
    public function render()
    {
        $this->users= User::where('name','like','%'.$this->search.'%')->get();
        return view('livewire.search');
    }
}
