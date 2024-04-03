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
    public $category = '';

    public function mount($post)
    {
        $this->title=$post->title;
        $this->subtitle=$post->subtitle;
    }
    public function createPost()
    {
        // Validazione dei dati del form
        $validatedData = $this->validate([
            'image' => 'required|image|max:2048', // Max 2MB
            'title' => 'required|max:255',
            'subtitle' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

        // Salva l'immagine nel filesystem di Laravel
        $imagePath = $this->image->store('images');

        // Crea il post nel database
        Post::create([
            'image' => $imagePath,
            'title' => $validatedData['title'],
            'subtitle' => $validatedData['subtitle'],
            'body' => $validatedData['body'],
            'category' => $validatedData['category'],
            'user_id' => Auth::id(),
        ]);

        // Pulisci i campi del form dopo aver creato il post
        $this->reset(['image', 'title', 'subtitle', 'body', 'category']);

        // Aggiorna la vista per visualizzare il nuovo post
        $this->emit('postCreated');
    }

    public function save()
    {
        Post::create(
            $this->only(['title', 'subtitle'])
        );

        session()->flash('status', 'Post successfully updated.');

        $this->redirect(Form::class);
    }
    public function render()
    {
        // return view('livewire.post', compact ('users'));
        return view('livewire.post');
    }
}
