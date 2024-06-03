<?php

use App\Livewire\CustomKeyboard;
use App\Livewire\Subscribe;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Cart;

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("homepage");
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

Route::get("/detail", function () {
    return view("detail");
})->name("detail");

Route::get("/subscribe", Subscribe::class)->name("subscribe");

Route::get("/custom-keyboard", CustomKeyboard::class)->name("custom-keyboard");

Route::get("/register", Register::class)->name("register");

Route::get("/login", Login::class)->name("login");
Route::middleware(["auth"])->group(function () {
    Route::get("/cart", Cart::class)->name("cart");
});
