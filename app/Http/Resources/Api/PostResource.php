<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'title' => $this->title,
            'slug' => $this->slug,
            'text' => $this->text,
            'status' => $this->status,
            'category' => $this->category,
            'keywords' => $this->keywords,
            'description' => $this->description,
            'indexation' => $this->indexation,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
