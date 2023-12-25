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

/* -- Dashboard Page-- */
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard')->middleware('guest');
/* -- Dashboard Page End -- */


/* -- Product Page-- */
Route::get('/product', function () {
    return view('pages.product');
})->name('product')->middleware('guest');
/* -- Product Page End -- */


/* -- Stock Page-- */
Route::get('/stock', function () {
    return view('pages.stock');
})->name('stock')->middleware('guest');
/* -- Stock Page End -- */

/* -- Expenses  Page-- */
Route::get('/expenses', function () {
    return view('pages.expenses');
})->name('expenses')->middleware('guest');
/* -- Expenses Page End -- */

/* -- Customers  Page-- */
Route::get('/customers', function () {
    return view('pages.customer');
})->name('customer')->middleware('guest');
/* -- Customers Page End -- */


/* -- Supplier  Page-- */
Route::get('/suppliers', function () {
    return view('pages.supplier');
})->name('supplier')->middleware('guest');
/* -- Supplier Page End -- */


/* -- Worker Page-- */
Route::get('/workers', function () {
    return view('pages.worker');
})->name('worker')->middleware('guest');
/* -- Workers Page End -- */



/* -- Users Page-- */
Route::get('/create-users', function () {
    return view('pages.create-users');
})->name('customer')->middleware('guest');
/* -- Users Page End -- */
