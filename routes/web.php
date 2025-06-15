<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscriptionController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [MessageController::class, 'store'])->name('messages.store');

Route::get('/about-us', [AboutController::class, 'index'])->name('about');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');

Route::get('/unsubscribe/{token}', [SubscriptionController::class, 'unsubscribe'])->name('unsubscribe');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');


