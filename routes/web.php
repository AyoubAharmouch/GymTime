

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tripleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GymerController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CoachController;
use App\Services\ExerciseService;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ItemController;


Route::get('/search', [ItemController::class, 'search'])->name('search');

Route::get('/home',[tripleController::class,'home'])->name("home.home");
Route::get('/',[tripleController::class,'home'])->name("home.home");

Route::get('/admin/{etat}', [GymerController::class, 'story'])->middleware(['auth', 'verified']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/catalogue', [CourseController::class,'cataloguepdf'])->name('courses.pdf');





Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/subscribers', function () {
    return view('subscribers.index');
})->name('subscribers.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('admin', GymerController::class);


Route::get('/admin', [GymerController::class, 'index'])->name('admin');
Route::get('/removed', [tripleController::class, 'userdel'])->name('subscriptions.userdel');
Route::get('/removed/{id}', [tripleController::class, 'show'])->name('admin.removedShow');
Route::delete('/removed/{id}', [tripleController::class, 'destroy']);

    Route::get('/admin/create',[GymerController::class,'create'])->name('admin.create');
    Route::post('/admin',[GymerController::class,'store'])->name('store');
    Route::post('/admin/{id}',[GymerController::class,'show'])->name('user.show');
    Route::post('/admin/{id}', [GymerController::class, 'updateInfo'])->name('update');
    Route::delete('/admin/{id}', [GymerController::class, 'destroy'])->name('admin.destroy');

    Route::get('/subscriptions/expire', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::get('/subscriptions', [SubscriptionController::class, 'active'])->name('subscriptions.active');
    Route::get('/subscriptions/{id}', [SubscriptionController::class, 'show'])->name('subscriptions.show');
    Route::put('/subscriptions/{id}', 'SubscriptionController@update');




    Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::post('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::get('/Allcourses', [CourseController::class, 'adminindex'])->name('admin.course');




Route::get('/coaches', [CoachController::class, 'index'])->name('coaches.index');
Route::get('/coaches/create', [CoachController::class, 'create'])->name('coaches.create');
Route::post('/coaches', [CoachController::class, 'store'])->name('coaches.store');
Route::get('/coaches/{id}/edit', [CoachController::class, 'edit'])->name('coaches.edit');
Route::put('/coaches/{id}', [CoachController::class, 'update'])->name('coaches.update');
Route::delete('/coaches/{id}', [CoachController::class, 'destroy'])->name('coaches.destroy');
});

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');


Route::get('/men-exercises', [ExerciseController::class, 'showMenExercises']);
Route::get('/women-exercises', [ExerciseController::class, 'showWomenExercises']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
