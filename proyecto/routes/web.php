<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/atencion', function () {
    return view('atencion');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/carrito', function () {
    return view('carrito');
});
Route::get('/compras', function () {
    return view('compras');
});