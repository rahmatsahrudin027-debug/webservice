<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('bagusimutsekali', function () {
    return view('bagusimutsekali');
});

require __DIR__.'/settings.php';
