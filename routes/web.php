<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;

// صفحه خانه
Route::get('/', [HomeController::class, 'index'])->name('home');

// صفحه رزومه
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');

// صفحه تماس با من
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// ارسال پیام از فرم تماس
Route::post('/send-message', [ContactController::class, 'store'])->name('sendMessage');
