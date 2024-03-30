<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('v_latihan1');
});

Route::get('/lat1', 'App\Http\Controllers\lat1Controller@index');
Route::get('/lat2', 'App\Http\Controllers\lat1Controller@method2');