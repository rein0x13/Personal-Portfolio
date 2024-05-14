<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ColorEnum: string implements HasLabel
{
    case BLUE_VIOLET = '1';
    case BLUE_PINK = '2';
    case GREEN_LIME = '3';
    case YELLOW_ORANGE = '4';
    case ORANGE_RED = '5';

    public function getClass(): string
    {
        return match ($this) {
            self::YELLOW_ORANGE => 'gradient-yellow-orange',
            self::BLUE_PINK => 'gradient-blue-pink',
            self::GREEN_LIME => 'gradient-green-lime',
            self::ORANGE_RED => 'gradient-orange-red',
            self::BLUE_VIOLET => 'gradient-blue-violet',
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::YELLOW_ORANGE => 'Gradient Yellow-Orange',
            self::BLUE_PINK => 'Gradient Blue-Pink',
            self::GREEN_LIME => 'Gradient Green-Lime',
            self::ORANGE_RED => 'Gradient Orange-Red',
            self::BLUE_VIOLET => 'Gradient Blue-Violet',
        };
    }
}
