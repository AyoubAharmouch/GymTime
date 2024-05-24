<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tripleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GymerController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\DashboardController;
use App\Services\ExerciseService;


Route::get('/',[tripleController::class,'home'])->name("home");
Route::get('/admin/{etat}', [GymerController::class, 'story'])->middleware(['auth', 'verified']);



Route::get('/dashboard', [DashboardController::class , 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/subscribers', function () {
    return view('subscribers.index');
})->name('subscribers.index');

Route::middleware('auth')->group(function () {
    Route::post('/admin/{id}',[GymerController::class,'show'])->name('user.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('admin', GymerController::class);
    
    
Route::get('/admin', [GymerController::class, 'index'])->name('admin');

    Route::get('/admin/create',[GymerController::class,'create'])->name('add_new');
    Route::post('/admin',[GymerController::class,'store'])->name('store');
Route::post('/admin/{id}', [GymerController::class, 'updateInfo'])->name('update');
Route::delete('/admin/{id}', [GymerController::class, 'destroy'])->name('admin.destroy');
Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');




});

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/men-exercises', [ExerciseController::class, 'showMenExercises']);
Route::get('/women-exercises', [ExerciseController::class, 'showWomenExercises']);