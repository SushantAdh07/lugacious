<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ForUsers\FeedbackController;
use App\Http\Controllers\Frontend\ForUsers\ProfileController as ForUsersProfileController;
use App\Http\Controllers\Frontend\ForUsers\UsersChoiceController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\StoreController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\RoleMiddleware;
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


//ForUsers

//UsersChoice
Route::controller(UsersChoiceController::class)->prefix('users-choice')->group(function(){
    Route::get('/', 'index')->name('users.choice');
    Route::post('/add', 'store')->name('add.choice')->middleware(AuthMiddleware::class, 'verified.email');
    Route::get('/delete/{delete}', 'destroy')->name('delete.choice');
});

//Feedbacks
Route::controller(FeedbackController::class)->group(function(){
    Route::get('/feedback', 'create')->name('feedback');
    Route::post('/feedback/add', 'store')->name('add.feedback')->middleware('custom.auth', 'verified');
});

//Favorites
Route::post('/stores/{store}/favorite', [StoreController::class, 'toggleFavorite'])->name('stores.toggleFavorite')->middleware('custom.auth');

//UsersProfile
Route::get('/your-profile', [ForUsersProfileController::class, 'index'])->name('users.profile');


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/search-store', 'search')->name('search.store');
});

Route::controller(StoreController::class)->group(function(){
    Route::get('/store/{store}', 'storeDetails')->name('store-details');
    Route::get('/create-store', 'newStore')->name('new-store')->middleware(RoleMiddleware::class);
    Route::post('/store/create', 'createStore')->name('create-store')->middleware(RoleMiddleware::class);
    Route::get('/store/edit/{store}', 'edit')->name('edit-store')->middleware(RoleMiddleware::class);
    Route::put('/store/update/{store}', 'update')->name('update-store')->middleware(RoleMiddleware::class);
    Route::get('/delete/{store}', 'deleteStore')->name('delete-store')->middleware(RoleMiddleware::class);
    //test
    Route::get('/feed', 'feed');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/create', 'createBlog')->name('create-blog')->middleware('admin');
});

//Backend
Route::get('/admin', function(){
    return view('backend.admin-dashboard');
})->middleware(App\Http\Middleware\AuthMiddleware::class);

//errors-test
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

require __DIR__.'/auth.php';
