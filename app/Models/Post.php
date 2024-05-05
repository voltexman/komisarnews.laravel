<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

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

    const STATUS_INACTIVE = 0;

    const STATUS_INDEXATION = 1;

    const STATUS_NO_INDEXATION = 0;

    const CATEGORY_CITIES = 'Міста';

    const CATEGORY_ARTICLES = 'Статті';

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('admin')
            ->width(80)
            ->sharpen(10)
            ->nonOptimized();

        $this->addMediaConversion('preview')
            ->width(640)
            ->height(480)
            ->sharpen(10)
            ->format('webp')
            ->nonOptimized();

        $this->addMediaConversion('header')
            ->height(280)
            ->format('webp')
            ->nonOptimized();
    }

    public static function getAllPostsCount()
    {
        return Post::count();
    }

    public static function getPublicationCount()
    {
        return Post::where('status', self::STATUS_ACTIVE)->count();
    }

    public static function getIndexationCount()
    {
        return Post::where('indexation', self::STATUS_INDEXATION)
            ->count();
    }
}
