<?php

namespace App\Enum;

enum ListingTypeEnum: string
{
    case TSE = 'tse';
    case OTC = 'otc';

    public static function getDescription(string $value): string
    {
        return match ($value) {
            self::TSE->value => '上市',
            self::OTC->value => '上櫃',
            default => $value,
        };
    }
}
