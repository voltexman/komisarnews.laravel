<?php

namespace App\Models;

use App\Enums\Order\Colors;
use App\Enums\Order\Goals;
use App\Enums\Order\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'goal' => Goals::class,
        'color' => Colors::class,
        'status' => Status::class,
    ];

    protected $fillable = [
        'goal',
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
