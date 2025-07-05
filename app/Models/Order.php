<?php

namespace App\Models;

use App\Enums\Order\HairColors;
use App\Enums\Order\OrderPurpose;
use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'purpose' => OrderPurpose::class,
        'color' => HairColors::class,
        'status' => OrderStatus::class,
    ];

    protected $fillable = [
        'purpose',
        'name',
        'city',
        'email',
        'phone',
        'hair_weight',
        'hair_length',
        'age',
        'color',
        'hair_options',
        'description',
        'status',
    ];
}
