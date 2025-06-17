<?php

namespace App\Services;

class CurrencyService
{
    private static array $rates = [
        'RUR' => 1,
        'USD' => 90,
        'EUR' => 100,
    ];

    private static array $signs = [
        'RUR' => '%s ₽',
        'USD' => '$%s',
        'EUR' => '€%s'
    ];

    public static function convert($price, string $currency)
    {
        $value = floatval($price) / static::$rates[$currency];

        return sprintf(
            static::$signs[$currency],
            number_format($value, 2, '.', ' ')
        );
    }
}
