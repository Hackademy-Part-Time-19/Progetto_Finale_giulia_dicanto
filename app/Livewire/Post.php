<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    public $title = '';
    public $subtitle = '';
    public $image = '';
    public $category_id = '';

    protected $rules = [
        'title' => 'required|max:40',
        'subtitle' => 'required|min:5',
        'description' => 'required|max:255',
        'category_id' => 'required',
        'body' => 'required|string|min:10',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
       /*  'image' => 'required|image|max:1024', */
    ];

    protected $messages = [
        'title.required' => 'Il campo titolo è obbligatorio',
        'title.max' => 'Il campo titolo deve essere lungo al massimo 40 caratteri',
        'subtitle.required' => 'Il campo prezzo è obbligatorio',
        'price.min' => 'Il campo prezzo deve essere minimo di 5 caratteri',
        'body.required' => 'Il campo testo è obbligatorio',
        'description.min' => 'Il campo testo deve essere lungo minimo 10 caratteri',
        'category_id.required' => 'Il campo categoria è obbligatorio',
        /* 'image.required' => 'Il campo :attribute è obbligatorio',
        'image.image' => 'Il campo :attribute deve essere un\'immagine',
        'image.max' => 'Il campo :attribute deve essere lungo al massimo 1024 caratteri', */
    ];
    
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
        // return view('livewire.post', compact ('users'));
        return view ('livewire.post', ['categories'=>Category::All()]);
    }
}
