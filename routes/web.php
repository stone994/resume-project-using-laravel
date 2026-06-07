<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('skills', function () {
    return view('skills');
})->name('skills');
Route::get('services',[ServiceController::class,'show'])->name('services');
Route::get('contact',[ContactController::class,'show'])->name('contact');

