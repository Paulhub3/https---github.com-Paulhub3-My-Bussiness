<?php

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

/* -- Welcome Page-- */

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('guest');
/* -- Welcome Page End -- */

/* -- Login Page-- */
Route::get('/login', function () {
    return view('livewire.login-user');
})->name('login')->middleware('guest');
/* -- Login Page End -- */

/* -- Home Page-- */
Route::get('/home', function () {
    return view('pages.home');
})->name('home')->middleware('guest');
/* -- Home Page End -- */
