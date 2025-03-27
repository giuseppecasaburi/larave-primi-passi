<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get("/benvenuto", function () {
    return view("salutami");
})->name("benvenuto");

Route::get("/arrivederci", function () {
    return view("arrivederci");
})->name("bye");

Route::get("/laravel", function () {
    return view("welcome");
})->name("home_laravel");