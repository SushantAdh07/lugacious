<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\StoreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Frontend
Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('home');
});

Route::controller(StoreController::class)->group(function(){
    Route::get('/store/{id}', 'storeDetails')->name('store-details');
    Route::get('/create-store', 'newStore')->name('new-store')->middleware('auth');
    Route::post('/store/create', 'createStore')->name('create-store');
});

require __DIR__.'/auth.php';
