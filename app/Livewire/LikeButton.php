<?php

namespace App\Livewire;

use App\Models\Like;
use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class LikeButton extends Component
{
    public $type = '';

    public Model $model;

    public function mount(Model $model)
    {
        $this->model = $model;
    }

    public function like(int $id): void
    {
        $model = $this->model->find($id);

        if (!$this->hasLike($id)) {
            Like::create([
                'likeable_id' => $model->id,
                'likeable_type' => $this->model::class,
                'ip_address' => request()->ip(),
            ]);
        }
    }

    public function hasLike(int $id): bool
    {
        return $this->model->find($id)
            ->likes()
            ->where('ip_address', request()->ip())
            ->exists();
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
