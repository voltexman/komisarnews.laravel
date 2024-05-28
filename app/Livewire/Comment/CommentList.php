<?php

namespace App\Livewire\Comment;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class CommentList extends Component
{
    public $postId;

    protected Post $post;

    protected $comments;

    #[On('comment-created')]
    public function boot()
    {
        $this->post = Post::find($this->postId);
    }

    public function render()
    {
        return view('livewire.comment.comment-list', [
            'comments' => $this->post->comments()->latest()->get(),
        ]);
    }
}
