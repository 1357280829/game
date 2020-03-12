<?php

namespace App\Enums;

final class Code extends Enum
{
    const Success = 1;
    const Fail = 0;

    const FailedValidate = 10000;

    public static function getDescription($value): string
    {
        $codeToMessage = [
            self::Success => '请求成功',
            self::Fail => '请求失败',
        ];

        return $codeToMessage[$value] ?? '未知错误';
    }
}
