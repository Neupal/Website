<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/header', function () {
    return view('/layouts/header');
});

Route::get('/footer', function () {
    return view('/layouts/footer');
});

Route::get('/home', [Website::class, 'main']);

Route::get('/about', [Website::class, 'about']);

Route::get('/contact', [Website::class, 'contact'])->name('contact');

Route::get('/services', [Website::class, 'services']);