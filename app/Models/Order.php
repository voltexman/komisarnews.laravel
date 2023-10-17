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
        'weight',
        'length',
        'age',
        'color',
        'images',
        'cutted',
        'painted',
        'gray',
        'description',
        'status',
    ];

    const STATUS_NEW = 0;

    const STATUS_VIEWED = 1;

    const STATUS_WAITING = 2;
}
