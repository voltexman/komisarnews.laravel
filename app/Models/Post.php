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

    // TODO: перевести значення констант в числові (0, 1)
    // А також переназначити нові значення всім постам в БД
    const CATEGORY_CITIES = 'cities';

    const CATEGORY_ARTICLES = 'articles';
}
