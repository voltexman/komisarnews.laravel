<?php

namespace App\Enums\Order;

use Filament\Support\Contracts\HasLabel;

enum OrderPurpose: string implements HasLabel
{
    case EVALUATE = 'evaluate';
    case SELL = 'sell';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::EVALUATE => 'Оцінка',
            self::SELL => 'Продаж',
        };
    }

    public function title(): ?string
    {
        return match ($this) {
            self::EVALUATE => 'Оцінити волосся',
            self::SELL => 'Продати волосся',
        };
    }

    public function getDescription(): string
    {
        return match ($this) {
            self::EVALUATE => 'Лише дізнатись ціну у майстра',
            self::SELL => 'Відправити волосся та отримати гроші',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::EVALUATE => 'badge-dollar-sign',
            self::SELL => 'wallet',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($case) => [$case->value => $case->title()])
            ->toArray();
    }
}
