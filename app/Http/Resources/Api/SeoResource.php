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
            'descriptions' => $this->descriptions,
            'robots' => $this->robots,
            'pageInformation' => $this->pageInformation(),
        ];
    }

    private function pageInformation(): ?array
    {
        $postInformation = [
            'allPostsCount' => Post::getAllPostsCount(),
            'publicationCount' => Post::getPublicationCount(),
            'indexationCount' => Post::getIndexationCount(),
        ];

        return $this->page === 'posts' ? $postInformation : null;
    }
}
