<?php

namespace App\Models;

use App\Enums\MetaPages;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta';

    public $timestamps = false;

    protected $casts = [
        'page' => MetaPages::class,
    ];

    protected $fillable = ['page', 'title', 'description', 'robots'];
}
