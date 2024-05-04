<?php

use App\Livewire\CustomKeyboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('prebuilt');
});

Route::get('/ai-price-plan', function () {
    return view('ai-price-plan');
});

Route::get("/custom-keyboard", CustomKeyboard::class)->name("custom-keyboard");
