<?php

namespace App\Enums\Order;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Status: int implements HasColor, HasIcon, HasLabel
{
    case NEW = 1;
    case VIEWED = 2;
    case IN_PROGRESS = 3;
    case CANCELED = 4;
    case READY = 5;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::NEW => 'Нове',
            self::VIEWED => 'Переглянуто',
            self::IN_PROGRESS => 'В очікуванні',
            self::CANCELED => 'Відмінено',
            self::READY => 'Завершено',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::NEW => 'danger',
            self::VIEWED => 'info',
            self::IN_PROGRESS => 'warning',
            self::CANCELED => 'gray',
            self::READY => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::NEW => 'heroicon-o-plus',
            self::VIEWED => 'heroicon-o-eye',
            self::IN_PROGRESS => 'heroicon-o-clock',
            self::CANCELED => 'heroicon-o-exclamation-triangle',
            self::READY => 'heroicon-o-check-circle',
            default => 'heroicon-o-eye'
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
