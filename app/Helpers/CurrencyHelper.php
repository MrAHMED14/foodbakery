<?php

namespace App\Helpers;

use App\Models\SiteConfiguration;
use Illuminate\Support\Facades\Cache;

class CurrencyHelper
{
    protected static $siteConfig = null;

    public static function getSiteConfig()
    {
        if (self::$siteConfig) {
            return self::$siteConfig;
        }

        return self::$siteConfig = Cache::rememberForever('site_currency_config', function () {
            return SiteConfiguration::first();
        });
    }

    public static function format($amount)
    {
        $config = self::getSiteConfig();

        $currency = $config?->currency_code ?? 'USD';
        $currencySymbol = $config?->currency_symbol ?? '$';
        $currencyPosition = $config?->currency_position ?? 'left';

        $decimals = 2;
        $decimalSeparator = '.';
        $thousandsSeparator = ',';

        if ($currency === 'DZD') {
            $decimals = 0;
            $decimalSeparator = '';
            $thousandsSeparator = ' ';
        }

        $formattedAmount = number_format($amount, $decimals, $decimalSeparator, $thousandsSeparator);

        if ($currencyPosition === 'left') {
            return $currencySymbol . $formattedAmount;
        } else {
            return $formattedAmount . ' ' . $currencySymbol;
        }
    }
}
