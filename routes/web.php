<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;






Route::get('/', [HomeController::class, 'index'])->name('pages.index');
Route::get('/makedonation', [PaymentController::class, 'show'])->name('pages.donate');


// Laravel 8
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');

// Laravel 8
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);

