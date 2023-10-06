<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    use HasFactory;

    const MAIN_PAGE = 'main';

    const POSTS_PAGE = 'posts';

    const CONTACTS_PAGE = 'contacts';

    protected $table = 'seo';
}
