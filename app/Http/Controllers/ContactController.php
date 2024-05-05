<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('contacts');
    }
}
