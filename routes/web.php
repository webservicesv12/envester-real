<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\FrontendController::class,'index'])->name('home');
Route::get('/packages', [\App\Http\Controllers\FrontendController::class,'packages'])->name('packages');
Route::get('/contact', [\App\Http\Controllers\FrontendController::class,'contact'])->name('contact');
Route::get('/about', [\App\Http\Controllers\FrontendController::class,'about'])->name('about');
Route::get('/faqs', [\App\Http\Controllers\FrontendController::class,'faqs'])->name('faqs');
Route::get('/privacy', [\App\Http\Controllers\FrontendController::class,'privacy'])->name('privacy');
Route::get('/hooks', [\App\Http\Controllers\HookController::class,'hooks'])->name('hooks');

require __DIR__.'/auth.php';
require __DIR__.'/guest.php';
require __DIR__.'/backend.php';
