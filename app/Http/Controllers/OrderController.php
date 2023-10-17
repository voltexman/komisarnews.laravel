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
            'name' => 'string|max:60|nullable',
            'city' => 'string|max:60',
            'email' => 'string|max:80|nullable',
            'phone' => 'numeric',
            'weight' => 'numeric|nullable',
            'length' => 'numeric',
            'age' => 'numeric|nullable',
            'color' => 'string|nullable',
            // 'images' => 'image',
            // 'images' => 'mimes:jpg,bmp,png',
            'cutted' => 'boolean',
            'painted' => 'boolean',
            'gray' => 'boolean',
            'description' => 'string|nullable',
        ]);

        $uploadedFiles = $request->file('images');

        foreach ($uploadedFiles as $file) {
            $name = time() . '_' . uniqid() . '.jpg';

            $file->move(public_path('uploads/orders'), $name);
        }

        // Збережіть назви файлів у форматі JSON у базі даних
        // Order::where('id', $id)->update(['images' => json_encode($imageNames)]);


        // $created = Order::create($validated);

        // $orderData = [
        //     'name' => $validated['name'],
        // ];

        // $sentMail = Mail::to(env('ADMIN_EMAIL'))
        //     ->send(new SendOrder($orderData));

        return true;
    }
}
