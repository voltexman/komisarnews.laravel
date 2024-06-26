<?php

namespace App\Http\Controllers;

use App\Enums\MetaPages;
use App\Models\Meta;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function list(): View
    {
        return view('article.list', [
            'meta' => Meta::where('page', MetaPages::POSTS)->first(),
        ]);
    }

    public function show(string $slug): View
    {
        $post = Post::firstWhere(
            [
                'is_published' => Post::PUBLISHED,
                'slug' => $slug,
            ]
        );

        return view('article.show', [
            'post' => $post,
        ]);
    }
}
