<?php

use App\Http\Controllers\ContactController;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', HomeController::class);

Route::resource('productos', ProductoController::class);

Route::get('contact', [ContactController::class, 'index'])
    ->name('contact.index'); 
Route::post('contact', [ContactController::class, 'store'])
    ->name('contact.store');

