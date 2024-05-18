<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Like extends Model
{
    protected $fillable = ['likeable_id', 'likeable_type', 'ip_address'];

    public $timestamps = false;

    public function likeable(): MorphTo
    {
        return $this->morphTo();
    }
}
