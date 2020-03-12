<?php

namespace App\Enums;

final class Ability extends Enum
{
    const Health =   1;
    const Power =    2;
    const Defense =  3;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::Health:
                return '生命值';
            case self::Power:
                return '力量';
            case self::Defense:
                return '守备';
            default:
                return self::getKey($value);
        }
    }
}
