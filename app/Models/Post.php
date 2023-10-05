<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'title',
        'slug',
        'text',
        'status',
        'category',
        'indexation',
        'keywords',
        'description',
        'created_at',
        'updated_at',
    ];

    const STATUS_ACTIVE = 1;

    const STATUS_INACTIVE = 1;

    const STATUS_DELETED = 3;

    const CATEGORY_CITIES = 0;

    const CATEGORY_ARTICLES = 1;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->name, '_');
        });
    }
}
