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
        'number',
        'goal',
        'name',
        'city',
        'email',
        'phone',
        'hair_weight',
        'hair_length',
        'age',
        'color',
        'description',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($order) {
            $order->number = random_int(10000, 99999);
        });
    }
}
