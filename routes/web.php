<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;

// صفحه اصلی
Route::get('/', function () {
    return view('welcome');
});

// صفحه رزومه
Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');

// صفحه تماس

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact',[ContactController::class,'contact'])->name('contact');


Route::post('/sendmessage', [ContactController::class, 'sendMessage'])->name('sendMessage');
