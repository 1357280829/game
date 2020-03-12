<?php

namespace App\Enums;

use BenSampo\Enum\Enum as BaseEnum;

//  重写一些方法
class Enum extends BaseEnum
{
    public static function getKey($value, bool $isLower = false): string
    {
        $key = parent::getKey($value);

        return $isLower ? strtolower($key) : $key;
    }

    public static function getKeys(bool $isLower = false): array
    {
        $keys = parent::getKeys();

        return $isLower ? array_map('strtolower', $keys) : $keys;
    }
}
