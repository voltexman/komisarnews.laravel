<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    const STATUS_ACTIVE = 0;

    const STATUS_INACTIVE = 1;

    const STATUS_DELETED = 2;

    const STATUS_INDEXATION = 1;

    const CATEGORY_CITIES = 0;

    const CATEGORY_ARTICLES = 1;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->name, '_');
        });
    }

    public static function getAllPostsCount()
    {
        return Post::where('status', '!=', self::STATUS_DELETED)->count();
    }

    public static function getPublicationCount()
    {
        return Post::where('status', self::STATUS_ACTIVE)->count();
    }

    public static function getIndexationCount()
    {
        return Post::where('indexation', self::STATUS_INDEXATION)
            ->where('status', '!=', self::STATUS_DELETED)
            ->count();
    }
}
