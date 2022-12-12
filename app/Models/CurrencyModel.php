<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyModel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'isoCode',
        'symbol',
        'dollarValue',
        'symbolBefore',
        'decimalSeparator',
        'thousandsSeparator',
    ];
}
