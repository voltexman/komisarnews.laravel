<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    protected $database;

    protected $tablename = 'feedbacks';

    public function __construct()
    {
        $this->database = app('firebase.database');
    }

    public function show(): View
    {
        $seo = SEO::where('page', SEO::CONTACTS_PAGE)->first();

        return view('contacts', [
            'title' => $seo->title,
            'description' => $seo->description,
            'robots' => $seo->robots,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'text' => 'required',
        ]);

        $postData = [
            'name' => $validated['name'],
            'contact' => $validated['contact'],
            'text' => $validated['text'],
            'cteated_at' => Carbon::now()->timestamp,
        ];
        $postReference = $this->database
            ->getReference($this->tablename)
            ->push($postData);

        return $postReference;
    }

    public function message()
    {
        return [
            'name.required' => 'A title is required',
        ];
    }
}
