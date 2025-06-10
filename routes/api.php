<?php


use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProgressController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::get('/quiz', [QuizController::class, 'index']);
});
Route::post('/quiz', [QuizController::class, 'store']);
Route::get('/quiz/{id}', [QuizController::class, 'show']);
Route::put('/quiz/{id}', [QuizController::class, 'update']);
Route::delete('/quiz/{id}', [QuizController::class, 'destroy']);

Route::get('/progress/{userId}', [ProgressController::class, 'getProgress']);
Route::post('/progress/{userId}', [ProgressController::class, 'updateProgress']);



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Kosong atau hanya API khusus nanti
// Saat ini, tidak diperlukan.

