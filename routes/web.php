<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/ai-price-plan', function () {
    return view('ai-price-plan');
});
