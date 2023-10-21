<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StripeController;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','subscription'])->resource('contact', ContactController::class)->names('contact');

Route::get('/subscription-checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/billing-portal', [StripeController::class, 'billingPortal'])->name('billing-portal');
Route::get('/free-trial-end', [StripeController::class, 'freeTrialEnd'])->name('free-trial-end');
