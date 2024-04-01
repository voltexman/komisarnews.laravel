<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function list(): View
    {
        return view('article.list', [
            // 'meta' => Meta::where('page', Meta::POSTS_PAGE)->first(),
            'posts' => Post::where(
                [
                    'status' => Post::STATUS_ACTIVE,
                    'category' => Post::CATEGORY_ARTICLES,
                ]
            )
                ->orderBy('created_at', 'desc')
                ->simplePaginate(2),
        ]);
    }

    public function show(string $slug): View
    {
        $post = Post::firstWhere(
            [
                'status' => Post::STATUS_ACTIVE,
                'slug' => $slug,
            ]
        );

        return view('article.show', [
            'post' => $post,
        ]);
    }
}
