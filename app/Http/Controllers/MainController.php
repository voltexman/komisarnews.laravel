<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Meta;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show(): View
    {
        return view('main', [
            'accordion' => Main::$accordion,
            'about' => Main::$about,
            // 'meta' => Meta::firstWhere('page', Meta::MAIN_PAGE),
        ]);
    }
}
