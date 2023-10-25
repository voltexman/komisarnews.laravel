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

    const STATUS_NEW = 0;

    const STATUS_VIEWED = 1;

    const STATUS_WAITING = 2;

    const STATUS_COMPLETED = 3;
}
