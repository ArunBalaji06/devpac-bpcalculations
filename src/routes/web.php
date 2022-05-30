<?php

use Devpac\Bpcalculation\App\Http\Controllers\CalculationController;

Route::get('/welcome', function(){
    echo "welcome";
});

Route::get('/add/{a}/{b}',[CalculationController::class,'add']);
Route::get('/sub/{a}/{b}',[CalculationController::class,'sub']);
