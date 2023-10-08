<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

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
        'cutted',
        'painted',
        'gray',
        'description',
        'status',
    ];

    const STATUS_NEW = 0;

    const STATUS_VIEWED = 1;

    const STATUS_WAITING = 2;

    protected function prepareForValidation(): void
    {
        $this->merge([
            'status' => self::STATUS_NEW,
        ]);
    }
}
