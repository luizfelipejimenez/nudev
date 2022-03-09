<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/user/{id}', function ($id) {
    return "O usuario é o numero " . $id;
});

Route::get('/usuario/{id}/nome/{nome}', function ($id, $nome) {
    return "O usuario é o numero " . $id . ' com nome '. $nome;
});

Route::get('/opcional/{id?}', function ($nome = 'Jose') {
    return "O usuario " . $nome;
});

