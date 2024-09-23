<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth', 'admin'])->group(function() {
    Route::resource('admin/cars', 'Admin\CarController');
    Route::resource('admin/rentals', 'Admin\RentalController');
    Route::resource('admin/customers', 'Admin\CustomerController');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', 'Frontend\PageController@home');
Route::get('/cars', 'Frontend\CarController@index');
Route::post('/rentals/book', 'Frontend\RentalController@book')->middleware('auth');
Route::get('/rentals/history', 'Frontend\RentalController@history')->middleware('auth');

require __DIR__.'/auth.php';
