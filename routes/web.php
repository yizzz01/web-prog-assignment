<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/ceritabunga', function () {
    return view('ceritabunga');
});

Route::get('/bagaimana', function () {
    return view('bagaimana');
});

Route::get('/Kapan', function () {
    return view('Kapan');
});

