<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Comment extends Model
{
    protected $fillable = ['post_id', 'content'];

    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
