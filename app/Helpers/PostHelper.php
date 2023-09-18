<?php

namespace App\Helpers;

class PostHelper
{
    public static function even($num): bool
    {
        return ! ($num & 1);
    }
}
