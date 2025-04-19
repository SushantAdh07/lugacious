<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\StoreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Frontend

//Test
Route::get('/users-choice', function(){
    return view('frontend.store.usersChoice');
})->name('users.choice');


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/search-store', 'search')->name('search.store');
});

Route::controller(StoreController::class)->group(function(){
    Route::get('/store/{store}', 'storeDetails')->name('store-details');
    Route::get('/create-store', 'newStore')->name('new-store')->middleware('auth');
    Route::post('/store/create', 'createStore')->name('create-store');
    Route::get('/store/edit/{store}', 'edit')->name('edit-store');
    Route::put('/store/update/{store}', 'update')->name('update-store');
    Route::get('/delete/{store}', 'deleteStore')->name('delete-store');
    //test
    Route::get('/feed', 'feed');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/create', 'createBlog')->name('create-blog');
});

//Backend
Route::get('/admin', function(){
    return view('backend.admin-dashboard');
})->middleware(App\Http\Middleware\AuthMiddleware::class);

require __DIR__.'/auth.php';
