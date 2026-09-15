<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'welcome')->name('home');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');