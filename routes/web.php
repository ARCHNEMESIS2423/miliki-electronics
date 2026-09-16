<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::livewire('/add_product','pages::products.create');

require __DIR__.'/settings.php';
