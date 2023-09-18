<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    use HasFactory;

    const MAIN_PAGE = 0;

    const ARTICLES_PAGE = 1;

    const CONTACTS_PAGE = 2;

    protected $table = 'seo';
}
