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

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/article', function () {
    return view('pages.article');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/login', function () {
    return view('pages.login');
});
