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
            'hair_weight' => 'numeric|nullable',
            'hair_length' => 'numeric',
            'age' => 'numeric|nullable',
            'color' => 'string|nullable',
            'photos.*' => 'image|mimes:jpg,bmp,png',
            'photos_names' => 'json',
            'cutted' => 'boolean',
            'painted' => 'boolean',
            'gray' => 'boolean',
            'description' => 'string|nullable',
        ]);

        $photosNames = [];

        if ($request->hasFile('photos')) {
            $uploadedPhotos = $request->file('photos');

            foreach ($uploadedPhotos as $file) {
                $photoName = date('YmdHi').'_'.uniqid().'.'.$file->extension();
                $photosNames[] = $photoName;

                $file->move(public_path('uploads/orders'), $photoName);
            }
        }

        $validated['photos_names'] = json_encode($photosNames);

        $created = Order::create($validated);

        // $orderData = [
        //     'name' => $validated['name'],
        // ];

        // $sentMail = Mail::to(env('ADMIN_EMAIL'))
        //     ->send(new SendOrder($orderData));

        return $created->number;
    }
}
