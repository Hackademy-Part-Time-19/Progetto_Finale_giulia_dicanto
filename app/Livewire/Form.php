<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Form extends Component
{
    public $title = '';
    public $subtitle = '';
    public function mount()
    {

    }

    public function save()
    {
        Post::create(
            $this->only(['title', 'subtitle'])
        );
 
        session()->flash('status', 'Post successfully updated.');
 
        return $this->redirect('/posts');
    }
    public function render()
    {
        return view('livewire.form', compact ('users'));
    }
}
