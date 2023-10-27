<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    const STATUS_NEW = 'new';

    const STATUS_VIEWED = 'viewed';

    const STATUS_PROCESSING = 'processing';

    const STATUS_COMPLETED = 'completed';
}
