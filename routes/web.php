<?php

use App\Livewire\CustomKeyboard;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("landing");
})->name("home");

Route::get("/ai-input", function () {
    return view("ai-input");
})->name("ai-suggestion");

Route::get("/ai-price-plan", function () {
    return view("ai-price-plan");
})->name("ai-price-plan");

Route::get("/prebuilt", function () {
    return view("prebuilt");
})->name("prebuilt");

Route::get("/coming-soon", function () {
    return view("coming-soon");
})->name("coming-soon");


Route::get("/custom-keyboard", CustomKeyboard::class)->name("custom-keyboard");
