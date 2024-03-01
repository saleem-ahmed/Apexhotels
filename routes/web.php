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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/service', function () {
    return view('layouts.services');
});
Route::get('/rooms', function () {
    return view('layouts.rooms');
});
Route::get('/destination', function () {
    return view('layouts.destination');
});
Route::get('/offer', function () {
    return view('layouts.offer');
});
Route::get('/awareness', function () {
    return view('layouts.awareness');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/blog', function () {
    return view('layouts.blog');
});
Route::get('/book', function () {
    return view('layouts.booknow');
});
