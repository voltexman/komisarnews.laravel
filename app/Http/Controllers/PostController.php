<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SEO;
use Illuminate\View\View;

class PostController extends Controller
{
    public function list(): View
    {
        return view('article.list', [
            'seo' => SEO::where('page', SEO::ARTICLES_PAGE)->first(),
            'articles' => Post::where(
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
        $article = Post::firstWhere(
            [
                'status' => Post::STATUS_ACTIVE,
                'slug' => $slug,
            ]
        );

        return view('article.show', [
            'title' => $article->title,
            'description' => $article->description,
            'robots' => $article->indexation,
            'article' => $article,
        ]);
    }
}
