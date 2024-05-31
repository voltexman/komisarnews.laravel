<?php

namespace App\Enums\Post;

use Filament\Support\Contracts\HasLabel;

enum Categories: int implements HasLabel
{
    case ARTICLES = 1;
    case CITIES = 2;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ARTICLES => 'Статті',
            self::CITIES => 'Міста',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
