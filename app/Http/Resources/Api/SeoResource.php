<?php

namespace App\Http\Resources\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'keywords' => $this->keywords,
            'description' => $this->description,
            'robots' => $this->robots,
            'counts' => $this->counts(),
        ];
    }

    private function counts(): ?array
    {
        $postCounts = [
            'allPostsCount' => Post::getAllPostsCount(),
            'publicationCount' => Post::getPublicationCount(),
            'indexationCount' => Post::getIndexationCount(),
        ];

        return $this->page === 'posts' ? $postCounts : null;
    }
}
