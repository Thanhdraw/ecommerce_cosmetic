<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dang-lam-route', function () {
    return "dang hoc route";
});