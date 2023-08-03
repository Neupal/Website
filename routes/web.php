<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\DescriptionController;
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

Route::get('/home', [ContactController::class, 'main']);

Route::get('/about', [ContactController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/services', [ContactController::class, 'services']);

Route::post('/storing', [ContactController::class, 'store'])->name('storing');

Route::get('/create', [DescriptionController::class, 'create']);