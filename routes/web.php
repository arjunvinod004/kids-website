<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/api/app-data', [AppController::class, 'apiData']);

// Public frontend shell routes with app UI
Route::get('/stories', [AppController::class, 'index'])->name('stories.index');
Route::get('/quizzes', [AppController::class, 'index'])->name('quizzes.index');
Route::get('/stories/{story}', [StoryController::class, 'show'])->name('stories.show');
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/', [AdminController::class, 'store'])->name('store');
        Route::get('/{content}/edit', [AdminController::class, 'edit'])->name('edit');
        Route::put('/{content}', [AdminController::class, 'update'])->name('update');
        Route::delete('/{content}', [AdminController::class, 'destroy'])->name('destroy');

        // Stories
        Route::resource('stories', StoryController::class);

        // Quizzes
        Route::resource('quizzes', QuizController::class);
    });
});

require __DIR__.'/auth.php';
