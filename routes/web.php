<?php

use App\Livewire\CustomKeyboard;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("landing");
});

Route::get("/custom-keyboard", CustomKeyboard::class)->name("custom-keyboard");
