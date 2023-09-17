<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SEO;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function list(): View
    {
        $seo = SEO::where(['page' => SEO::ARTICLE_PAGE])->first();

        return view('article.list', [
            'title' => $seo->title,
            'description' => $seo->description,
            'robots' => $seo->robots,
            'articles' => Post::where(
                [
                    'status' => Post::STATUS_ACTIVE,
                    'category' => Post::CATEGORY_ARTICLES
                ]
            )
                ->orderBy('created_at', 'desc')
                ->simplePaginate(2)
        ]);
    }

    public function show(string $slug): View
    {
        return view('article.show', [
            'article' => Post::firstWhere(
                [
                    'status' => Post::STATUS_ACTIVE,
                    'slug' => $slug
                ]
            )
        ]);
    }
}
