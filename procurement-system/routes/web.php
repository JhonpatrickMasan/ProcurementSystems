<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MainPage;
use App\Http\Livewire\SignIn;
use App\Http\Livewire\SignUp;
use App\Http\Controllers\DashboardController;


Route::get('/', MainPage::class);
Route::get('/signin', SignIn::class)->name('signin');
Route::get('/signup', SignUp::class)->name('signup');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});