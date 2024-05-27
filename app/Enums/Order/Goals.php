<?php

namespace App\Enums\Order;

use Filament\Support\Contracts\HasLabel;

enum Goals: int implements HasLabel
{
    case EVALUATE = 1;
    case SELL = 2;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::EVALUATE => 'Хочу оцінити волосся',
            self::SELL => 'Хочу продати волосся',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::EVALUATE => 'Лише дізнатись ціну у майстра',
            self::SELL => 'Відправити волосся та отримати гроші',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::EVALUATE => '',
            self::SELL => '',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
    