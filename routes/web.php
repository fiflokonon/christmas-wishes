<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.layout');
});

Route::get('/error-404', function () {
    return view('partials.error-404');
})->name('not_found');

Route::get('/new-message', function () {
    return view('layouts.new_message');
})->name('message');

Route::get('/wishes/{key}', [MessageController::class, 'wishes'])->name('wishes');
Route::post('/messages', [MessageController::class, 'new_message'])->name('add_message');

Route::get('/messages/{key}', [MessageController::class, 'message'])->name('link');
Route::post('/newsletter/subscription', [SubscriptionController::class, 'new_subscription'])->name('add_subscription');
