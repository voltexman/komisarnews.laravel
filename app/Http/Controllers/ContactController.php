<?php

namespace App\Http\Controllers;

use App\Mail\SendFeedback;
use App\Models\SEO;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        return view('contacts', [
            'seo' => SEO::where('page', SEO::CONTACTS_PAGE)->first(),
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

        $sentMail = Mail::to(env('ADMIN_EMAIL'))
            ->send(new SendFeedback($postData));

        return $postReference && $sentMail;
    }
}
