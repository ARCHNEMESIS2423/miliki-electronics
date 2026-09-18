<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');

Route::livewire('/create/product', 'pages::products.create')->middleware(['auth', 'admin']);

require __DIR__ . '/settings.php';
