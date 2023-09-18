<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show(): View
    {
        $home = SEO::firstWhere('page', SEO::MAIN_PAGE);

        return view('main', [
            'title' => $home->title,
            'keywords' => $home->keywords,
            'description' => $home->description,
            'robots' => $home->indexation,
        ]);
    }
}
