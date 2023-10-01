<?php

namespace App\Http\Controllers;

use App\Mail\SendOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    protected $database;

    protected $tablename = 'orders';

    public function __construct()
    {
        $this->database = app('firebase.database');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'text' => 'required',
        ]);

        $orderData = [
            'name' => $validated['name'],
            'contact' => $validated['contact'],
            'text' => $validated['text'],
            'cteated_at' => Carbon::now()->timestamp,
        ];
        $postReference = $this->database
            ->getReference($this->tablename)
            ->push($orderData);

        $sentMail = Mail::to(env('ADMIN_EMAIL'))
            ->send(new SendOrder($orderData));

        return $postReference && $sentMail;
    }
}
