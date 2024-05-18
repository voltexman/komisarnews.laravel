<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    const MAIN_PAGE = 'main';

    const POSTS_PAGE = 'posts';

    const CONTACTS_PAGE = 'contacts';

    protected $table = 'meta';

    public $timestamps = false;

    protected $fillable = ['page', 'title', 'description', 'robots'];
}
