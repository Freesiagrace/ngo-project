<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\SponsorController;

Route::get('/', function () {
    return view('landing');
});

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/sponsor', 'sponsor')->name('sponsor');


Route::view('/sponsorform','sponsorform')->name('sponsorform');

Route::get('/donate', [DonateController::class, 'showDonatePage'])->name('donate');
Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');