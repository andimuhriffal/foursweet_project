<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| FOUR SWEET — Frontend preview routes (TANPA BACKEND)
|--------------------------------------------------------------------------
| Seluruh halaman di bawah ini hanya menampilkan Blade + data dummy.
| Tidak ada controller bisnis, model, migration, autentikasi, maupun API.
| Route::view dipakai supaya setiap halaman bisa diakses untuk preview.
*/

Route::view('/', 'pages.home');
Route::view('/products', 'pages.products');
Route::view('/products/{slug}', 'pages.product-detail');
Route::view('/cart', 'pages.cart');
Route::view('/checkout', 'pages.checkout');
Route::view('/about', 'pages.about');
Route::view('/admin-preview', 'admin-preview.dashboard');
