<?php

use App\Http\Controllers\BackgroundController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/missions', function () {
    return view('missions');
});
Route::get('/book_now', function () {
    return view('book_now');
});



Route::post('/change-image', [BackgroundController::class, 'ChangeImage'])
    ->name('change.image');