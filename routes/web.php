<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Hitesh"]);
});

Route::get('/teas', function () {
   $teas = [
    ["name" => "Masala Chai", "price" => 100, "id" => 1],
    ["name" => "Earl Grey", "price" => 150, "id" => 2],
    ["name" => "Assam", "price" => 200, "id" => 3],
   ];
    return view('teas.index', ['teas' => $teas]);
});

Route::get('/teas/{id}', function ($id) {
    $teas = [
        ["name" => "Masala Chai", "price" => 100, "id" => 1],
        ["name" => "Earl Grey", "price" => 150, "id" => 2],
        ["name" => "Assam", "price" => 200, "id" => 3],
    ];
    return view('teas.teadetail', ['tea' => $teas[$id - 1]]);
});