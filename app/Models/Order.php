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
        // 'photos',
        'photos_names',
        'cutted',
        'painted',
        'gray',
        'description',
        'status',
    ];

    const STATUS_NEW = 'new';

    const STATUS_VIEWED = 'viewed';

    const STATUS_PROCESSING = 'processing';

    const STATUS_COMPLETED = 'completed';

    public static function boot()
    {
        parent::boot();

        self::creating(function ($order) {
            $order->number = random_int(10000, 99999);
        });
    }
}
