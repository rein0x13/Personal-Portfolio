<?php

namespace App\Enums;

enum ColorEnum: string
{
    case PRIMARY = '1';
    case SECONDARY = '2';
    case SUCCESS = '3';
    case WARNING = '4';
    case DANGER = '5';

    public function color(): string
    {
        return match ($this) {
            self::PRIMARY => 'primary',
            self::SECONDARY => 'info',
            self::SUCCESS => 'success',
            self::WARNING => 'warning',
            self::DANGER => 'danger',
        };
    }
}
