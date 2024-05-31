<?php

namespace App\Livewire;

use App\Livewire\Forms\CommentForm;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Livewire\Component;

class Comments extends Component
{
    public CommentForm $form;

    protected Post $post;

    public $postId;

    protected $comments;

    public function boot()
    {
        $this->post = Post::find($this->postId);
    }

    public function like(int $commentId): void
    {
        $comment = Comment::find($commentId);

        if ($comment && ! $this->hasLike($commentId)) {
            Like::create([
                'likeable_id' => $comment->id,
                'likeable_type' => Comment::class,
                'ip_address' => request()->ip(),
            ]);
        }
    }

    public function hasLike(int $commentId): bool
    {
        return Comment::find($commentId)
            ->likes()
            ->where('ip_address', request()->ip())
            ->exists();
    }

    public function save()
    {
        $this->form->createComment($this->postId);
        $this->dispatch('comment-created');
    }

    public function render()
    {
        return view('livewire.comment', [
            'comments' => $this->post->comments()->latest()->get(),
        ]);
    }
}
