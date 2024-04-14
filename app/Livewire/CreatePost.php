<?php

namespace App\Livewire;


use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Post;
#[Layout('layouts.app')]
class CreatePost extends Component
{
    public $title;

    public function mount($title = null)
    {
        $this->title = $title;
    }

    public function save()
    {
        $post = Post::create([
            'title' => $this->title
        ]);

        return redirect()->to('/posts')
            ->with('status', 'Post created!');
    }
    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.show-posts')
            ->extends('layouts.app');
        return view('livewire.create-post');
    }
}
