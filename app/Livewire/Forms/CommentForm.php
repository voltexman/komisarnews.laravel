<?php

namespace App\Livewire\Forms;

use App\Models\Comment;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CommentForm extends Form
{
    #[Rule([
        'content' => 'string|required|min:10|max:800',
    ], message: [
        'content.required' => 'Необхідно написати коментар',
        'content.min' => 'Ви написали занадто короткий коментар',
    ])]
    public $content = '';

    public function createComment(int $postId): void
    {
        $this->validate();

        Comment::create([
            'post_id' => $postId,
            'content' => $this->content,
        ]);

        session()->flash('comment-success');

        $this->reset();
    }
}
