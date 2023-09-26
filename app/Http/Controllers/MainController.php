<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show(): View
    {
        return view('main', [
            'seo' => SEO::firstWhere('page', SEO::MAIN_PAGE),
        ]);
    }
}
