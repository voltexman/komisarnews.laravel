<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\HasTags;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use HasTags;
    use InteractsWithMedia;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'slug',
        'body',
        'category',
        'is_published',
        'is_indexing',
        'description',
        'keywords',
    ];

    const PUBLISHED = 1;

    const HIDDEN = 0;

    const INDEXING = 1;

    const NO_INDEXING = 0;

    const CATEGORY_CITIES = 'Міста';

    const CATEGORY_ARTICLES = 'Статті';

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
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
}
