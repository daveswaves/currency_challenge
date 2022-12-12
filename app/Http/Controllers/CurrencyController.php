<?php

namespace App\Http\Controllers;

use App\Services\CurrencyAdditionService;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    
    public function __construct(private CurrencyAdditionService $currencyAdditionService)
    {
        // parent::__construct();
    }
    
    
    public function index(
        string $currencyOne,
        string $amountOne,
        string $currencyTwo,
        string $amountTwo,
    )
    {
        return $this->currencyAdditionService
            ->getTotal(
                $currencyOne,
                $amountOne,
                $currencyTwo,
                $amountTwo,
            );
    }
    
}
