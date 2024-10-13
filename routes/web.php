<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;

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



Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('front.pages.home');
});

Route::get('locale/{locale}', [LanguageController::class, 'setLocale'])->name('locale');


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');




