<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'goal' => 'string',
            'name' => 'string|max:60',
            'city' => 'string|max:60',
            'email' => 'email|max:80',
            'phone' => 'numeric',
            'weight' => 'numeric',
            'length' => 'numeric',
            'age' => 'numeric',
            'color' => 'string|nullable',
            'cutted' => 'boolean',
            'painted' => 'boolean',
            'gray' => 'boolean',
            'description' => 'string|nullable',
        ]);

        $created = Order::create($validated);

        // $orderData = [
        //     'name' => $validated['name'],
        // ];

        // $sentMail = Mail::to(env('ADMIN_EMAIL'))
        //     ->send(new SendOrder($orderData));

        return $created;
    }
}
