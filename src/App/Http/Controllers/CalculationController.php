<?php

namespace Devpac\Bpcalculation\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculationController extends Controller
{
    public function add($a,$b){
        $result = $a + $b;
        return view('bpcalculation::show',compact('result'));
    }

    public function sub($a,$b){
        $result = $a - $b;
        return view('bpcalculation::show',compact('result'));
    }
}
