<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public int $page = 1;

    public Collection $posts;

    public function mount()
    {
        $this->posts = collect();
        $this->loadMore();
    }

    #[Computed()]
    public function paginator()
    {
        return Post::where([
            'status' => Post::STATUS_ACTIVE,
            'category' => Post::CATEGORY_ARTICLES,
        ])->latest()->paginate(8, ['*'], 'page', $this->page);
    }

    public function loadMore()
    {
        $this->posts->push(
            ...$this->paginator->getCollection()
        );

        $this->page = $this->page + 1;
    }

    public function placeholder()
    {
        return view('livewire.skeleton-post-list');
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
