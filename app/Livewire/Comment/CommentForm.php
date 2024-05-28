<?php

namespace App\Livewire\Comment;

use App\Livewire\Forms\CommentForm as Form;
use App\Models\Post;
use Livewire\Component;

class CommentForm extends Component
{
    public Form $form;

    public $postId;

    protected Post $post;

    public function boot()
    {
        $this->post = Post::find($this->postId);
    }

    public function save()
    {
        $this->form->createComment($this->postId);
        $this->dispatch('comment-created');
    }

    public function render()
    {
        return view('livewire.comment.comment-form');
    }
}
