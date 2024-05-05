<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show(): View
    {
        return view('main', [
            // 'meta' => Meta::firstWhere('page', Meta::MAIN_PAGE),
        ]);
    }
}
