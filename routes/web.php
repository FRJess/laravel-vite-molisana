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
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    return view('products');
})->name('products');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/post', function () {
    return view('posts');
})->name('posts');
