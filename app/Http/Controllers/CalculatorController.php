<?php

namespace App\Http\Controllers;

use App\Http\Services\CalculatorServices;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $calculatorServices;

    public function __construct(CalculatorServices $calculatorServices)
    {
        $this->calculatorServices = $calculatorServices;
    }

    public function calculation(Request $request)
    {
        $p = $this->calculatorServices->calculation($request);
        return view("calculator", compact('p'));
    }
}
