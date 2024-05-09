<?php

use Illuminate\Support\Facades\Route;

Route::get('/saludo', function () {
    
    return view('greeting');
});
Route::get('/saludo/{nombre}', function ($nombre) {
    return view('greeting', ['nombre' => $nombre]);
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/categoria', function(){
    return view('categoria');
});
Route::get('/producto', function(){
    return view('producto');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/registrar', function(){
    return view('registrar');
});

Route::get('/categorian/{nombre}', function ($nombre) {
    return view('categorian', ['category' => $nombre]);
})->name('categorian.show');