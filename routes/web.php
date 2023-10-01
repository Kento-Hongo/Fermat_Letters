<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', [QuestionController::class, 'index'])->name('index');
Route::get('/questions/create', [QuestionController::class, 'create']);
Route::get('/questions/{question}', [QuestionController::class, 'show']);
Route::post('/questions', [QuestionController::class, 'store']);
Route::get('/answers/{answer}', [QuestionController::class ,'show']);
Route::post('answers', [AnswerController::class, 'store']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
