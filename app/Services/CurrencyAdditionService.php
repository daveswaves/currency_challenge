<?php

namespace App\Services;

use App\Services\CurrencyConversionService;
use App\Services\CurrencyFormatService;
use App\Resources\CurrencyResource;

class CurrencyAdditionService
{
    public function __construct(
        private CurrencyConversionService $currencyConversionService,
        private CurrencyFormatService $currencyFormatService,
        private CurrencyResource $currencyResource
    )
    {
    }
    
    public function getFormatTotal(
        string $currencyOne,
        float $amountOne,
        string $currencyTwo,
        float $amountTwo,
    ): string
    {
        $totalAmount = $this->getTotal(
            $currencyOne,
            $amountOne,
            $currencyTwo,
            $amountTwo,
        );
        
        $totalCurrencyResource = $this->CurrencyResource
            ->setAmount($totalAmount)
            ->setCurrency($currencyOne);
        
        $formattedAmount = $this->CurrencyFormatService
            ->getFormattedValue($totalCurrencyResource);
        
        return $formattedAmount;
    }
    
    public function getTotal(
        string $currencyOne,
        float $amountOne,
        string $currencyTwo,
        float $amountTwo,
    ): float
    {
        $amountTwoConverted = $this->currencyConversionService
            ->getConvertedAmount($currencyOne, $currencyTwo, $amountTwo,);
        
        return round($amountOne - $amountTwoConverted, 2);
    }
}