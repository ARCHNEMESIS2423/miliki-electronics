<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');
Route::livewire('/dashboard', 'layouts::dashboard')->name('dashboard')->middleware('auth');

Route::livewire('/create/product', 'pages::products.create')->name('add_product')->middleware(['auth', 'admin']);
Route::livewire('/view/product', 'pages::products.view')->name('see_products')->middleware(['auth', 'admin']);
Route::livewire('/edit/product/{product}', 'pages::products.edit')->name('edit_product')->middleware(['auth', 'admin']);

require __DIR__ . '/settings.php';
