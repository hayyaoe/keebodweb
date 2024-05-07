<?php

use App\Livewire\CustomKeyboard;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("landing");
})->name("home");

Route::get("/ai-price-plan", function () {
    return view("ai-price-plan");
})->name("ai-suggestion");

Route::get("/prebuilt", function () {
    return view("prebuilt");
})->name("prebuilt");

Route::get("/custom-keyboard", CustomKeyboard::class)->name("custom-keyboard");
