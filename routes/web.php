<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $laravel = "Pagina Laravel";
    $saluto_benvenuto = "Fatti salutare bello!";
    $bye = "Devi andare via?";

    return view('home', ["laravel" => $laravel, "benvenuto" => $saluto_benvenuto, "bye" => $bye]);
})->name("home");

Route::get("/benvenuto", function () {
    $laravel = "Pagina Laravel";
    $saluto_benvenuto = "Fatti salutare bello!";
    $bye = "Devi andare via?";

    return view("salutami")->with("laravel", $laravel)->with("benvenuto", $saluto_benvenuto)->with("bye", $bye);
})->name("benvenuto");

Route::get("/arrivederci", function () {
    $laravel = "Pagina Laravel";
    $saluto_benvenuto = "Fatti salutare bello!";
    $bye = "Devi andare via?";

    return view("arrivederci", compact("laravel", "saluto_benvenuto", "bye"));
})->name("bye");

Route::get("/laravel", function () {
    return view("welcome");
})->name("home_laravel");