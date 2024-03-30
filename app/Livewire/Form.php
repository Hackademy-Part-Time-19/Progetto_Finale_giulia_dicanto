<?php

namespace App\Livewire;


use App\Models\User;
use Livewire\Component;

class Form extends Component
{
    public $title="";
    public $subtitle="";
    public function mount()
    {

    }
    public function render()
    {
        $user= User::all();
        return view('livewire.form');
    }
}
