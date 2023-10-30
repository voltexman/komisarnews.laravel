<?php

namespace App\Http\Controllers;

use App\Mail\SendFeedback;
use App\Models\Feedback;
use App\Models\SEO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
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

        $created = Feedback::create([
            'name' => $validated['name'],
            'contact' => $validated['contact'],
            'text' => $validated['text'],
            'status' => Feedback::STATUS_NEW,
        ]);

        $mailData = [
            'name' => $validated['name'],
            'contact' => $validated['contact'],
            'text' => $validated['text']
        ];

        $sentMail = Mail::to(env('ADMIN_EMAIL'))
            ->send(new SendFeedback($mailData));

        return true;
    }
}
