<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;

/*
cd /opt/lampp/htdocs/currency_challenge && php artisan serve

http://127.0.0.1:8000/api/gbp/2000/eur/3000
http://127.0.0.1:8000/api/gbp/2000/eur/3000/format
*/

Route::get('/{amountOne}/{currencyOne}/{amountTwo}/{currencyTwo}/{opt?}', [CurrencyController::class, 'index'])->name('index');
