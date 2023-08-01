<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebsiteController;
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

Route::get('/form', function () {
    return view('form');
});

Route::get('/home', [WebsiteController::class, 'main']);

Route::get('/about', [WebsiteController::class, 'about']);

Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

Route::get('/services', [WebsiteController::class, 'services']);

Route::post('/storing', [WebsiteController::class, 'store'])->name('storing');