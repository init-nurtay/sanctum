<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/login', function () {
    return redirect(to: "http://mykid.lc/login");
})
    ->middleware('guest')
    ->name('login');

require __DIR__ . '/auth.php';
