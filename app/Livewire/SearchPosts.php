<?php

namespace App\Livewire;

use App\Livewire\Forms\SearchForm;
use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public SearchForm $form;

    public function render()
    {
        $posts = [];
        if (strlen($this->form->search) > 3) {
            $posts = Post::where('name', 'like', '%'.$this->form->search.'%')->limit(10)->get();
        }

        return view('livewire.search-posts', compact('posts'));
    }
}
