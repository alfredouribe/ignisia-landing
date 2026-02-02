<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/subscriptions', function () {
    return view('subscription');
});


Route::post('/debug-csrf', function () {
    return response()->json(['ok' => true]);
});

Route::post('/contact', [MailController::class,'send'])->name('contact.send')->middleware('throttle:10,1');
