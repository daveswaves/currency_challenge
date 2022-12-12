<?php

namespace App\Repositories;

use App\Models\Currency;

class CurrencyRepository
{
    public function currencyExists(string $isoCode): bool
    {
        return Currency::where('iso_code', $isoCode)
            ->exists();
    }
    
    public function addCurrency(
        string $isoCode,
        string $symbol,
        string $decimalSeparator,
        string $thousandSeparator,
        bool   $symbolBefore,
        float  $dollarValue,
    ){
        Currency::create([
            'isoCode'             => $isoCode,
            'symbol'              => $symbol,
            'decimal_separator'   => $decimalSeparator,
            'thousands_separator' => $thousandsSeparator,
            'symbol_before'       => $symbolBefore,
            'dollar_value'        => $dollarValue,
        ]);
    }
    
    public function getCurrency(string $isoCode): string
    {
        return Currency::where('iso_code', $isoCode)
            ->first();
    }
    
    public function getSymbol(string $isoCode): string
    {
        return Currency::where('iso_code', $isoCode)
            ->value('symbol');
    }
    
    public function getDecimalSeparator(string $isoCode): string
    {
        return Currency::where('iso_code', $isoCode)
            ->value('decimal_separator');
    }
    
    public function getThousandsSeparator(string $isoCode): string
    {
        return Currency::where('iso_code', $isoCode)
            ->value('thousands_separator');
    }
    
    public function getSymbolBefore(string $isoCode): string
    {
        return Currency::where('iso_code', $isoCode)
            ->value('symbol_before');
    }
    
    public function getDollarValue(string $isoCode): string
    {
        return Currency::where('iso_code', $isoCode)
            ->value('dollar_value');
    }
}
