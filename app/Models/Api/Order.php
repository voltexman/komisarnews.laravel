<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_NEW = 0;

    const STATUS_VIEWED = 1;

    const STATUS_WAITING = 2;
}
