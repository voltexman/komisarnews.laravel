<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $attributes = [
        'status' => self::STATUS_NEW,
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

    const GOAL_EVALUATE = 'Хочу оцінити вартість';

    const GOAL_SELL = 'Хочу продати волосся';

    const STATUS_NEW = 'Нове';

    const STATUS_VIEWED = 'Переглянуто';

    const STATUS_PROCESSING = 'Оброблюється';

    const STATUS_COMPLETED = 'Завершене';
}
