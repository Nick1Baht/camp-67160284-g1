<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::get('/se',function() {
    return view('template.default');
});

Route::get('/form', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/form', [App\Http\Controllers\MyController::class, 'store']);

//Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
//Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);


