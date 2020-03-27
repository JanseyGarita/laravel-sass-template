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
    return view('home', ['home' => 'active', 'about' => '', 'services' => '', 'gallery' => '']);
});
Route::get('/inicio', function () {
    return view('home', ['home' => 'active', 'about' => '', 'services' => '', 'gallery' => '']);
});
Route::get('/nosotros', function () {
    return view('about', ['home' => '', 'about' => 'active', 'services' => '', 'gallery' => '']);
});
Route::get('/servicios', function () {
    return view('services', ['home' => '', 'about' => '', 'services' => 'active', 'gallery' => '']);
});
Route::get('/galeria', function () {
    return view('gallery', ['home' => '', 'about' => '', 'services' => '', 'gallery' => 'active']);
});
