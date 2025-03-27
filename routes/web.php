<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/benvenuto", function () {
    return view("salutami");
});

Route::get("/arrivederci", function () {
    return view("arrivederci");
});

Route::get("/laravel", function () {
    return view("welcome");
});