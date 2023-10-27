<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\OrderResource;
use App\Models\Api\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Завантажити список всіх заявок.
     */
    public function index()
    {
        return OrderResource::collection(Order::all());
    }

    /**
     * Зміна статусу заявки.
     */
    public function status(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $order->update(['status' => $request->status]);

        return $order;
    }
}
