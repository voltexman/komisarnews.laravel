<?php

namespace App\Enums\Post;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Categories: int implements HasColor, HasIcon, HasLabel
{
    case PUBLISHED = 1;
    case HIDDEN = 0;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PUBLISHED => 'Опубліковано',
            self::HIDDEN => 'Приховано',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::PUBLISHED => 'danger',
            self::HIDDEN => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PUBLISHED => 'heroicon-o-eye',
            self::HIDDEN => 'heroicon-o-eye',
            default => 'heroicon-o-eye'
        };
    }
}
