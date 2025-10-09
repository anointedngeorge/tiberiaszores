<?php

if (!function_exists('logo')) {
    function logo($path, $height='80'): string {
        return "<img src='" . asset($path) . "' alt='Logo' height='". $height ."'  />";
    }
}



if (!function_exists('money_local_format')) {

    function money_local_format($amount, $locale = 'en_NG', $currency = 'NGN')
    {
        $fmt = new \NumberFormatter($locale, \NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($amount, $currency);
    }

}