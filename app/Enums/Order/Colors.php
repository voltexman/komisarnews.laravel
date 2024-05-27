<?php

namespace App\Enums\Order;

use Filament\Support\Contracts\HasLabel;

enum Colors: int implements HasLabel
{
    case BLOND = 1;
    case LIGHT_FAIR = 2;
    case FAIR = 3;
    case LIGHT_BROWN = 4;
    case DARK_BROWN = 5;
    case BLACK = 6;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::BLOND => 'Блонд',
            self::LIGHT_FAIR => 'Світло-русий',
            self::FAIR => 'Русий',
            self::LIGHT_BROWN => 'Світло-коричневий',
            self::DARK_BROWN => 'Темно-коричневий',
            self::BLACK => 'Чорний',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::BLOND => '',
            self::LIGHT_FAIR => '',
            self::FAIR => '',
            self::LIGHT_BROWN => '',
            self::DARK_BROWN => '',
            self::BLACK => '',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
