<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;

    const STATUS_INACTIVE = 1;

    const STATUS_DELETED = 3;

    const CATEGORY_CITIES = 0;

    const CATEGORY_ARTICLES = 1;
}
