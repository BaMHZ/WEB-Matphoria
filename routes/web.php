<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SettingController;


// Rute Halaman Utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// // Rute Halaman Utama
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



// Rute Home (Tambahkan Nama Rute)
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home'); // 🚀 Tambahkan name('home')

// Rute Halaman Lainnya
Route::get('/material', function () {
    return view('list-of-material');
})->middleware(['auth'])->name('material');
// Rute Halaman Lainnya

Route::get('/scientific-calculator', function () {
    return redirect('https://www.desmos.com/scientific');
});

Route::get('/siswa/dashboard', function () {
    return view('home'); // sesuai nama file yang sekarang
})->middleware(['auth'])->name('siswa.dashboard');

Route::get('/guru/dashboard', function () {
    return view('guru.dashboardguru'); // view khusus guru
})->middleware(['auth'])->name('guru.dashboard');


Route::get('/discussion', function () {
    return view('discussion');
})->middleware(['auth'])->name('discussion');

// Route::get('/information', function () {
//     return view('information');
// })->middleware(['auth'])->name('information');

Route::middleware(['auth'])->group(function () {
    Route::resource('forums', ForumController::class);
    Route::post('/forum/{forum}/comment', [CommentController::class, 'store'])->name('comments.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
    Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');
});

Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::get('/fetch-events', [CalendarController::class, 'fetchEvents']);
Route::post('/store-event', [CalendarController::class, 'storeEvent']);
Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/setting', [SettingController::class, 'form'])->name('setting.form');
Route::post('/setting/store', [SettingController::class, 'store'])->name('setting.store');
Route::get('/setting/information', [SettingController::class, 'information'])->name('setting.information');
Route::get('/setting/home', [SettingController::class, 'home'])->name('home');
Route::delete('/setting/delete/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');  
Route::get('setting/{id}/edit', [ForumController::class, 'edit'])->name('setting.edit');

// Rute Profile (Hanya Bisa Diakses oleh Pengguna yang Sudah Login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Pastikan File `auth.php` Ada
require __DIR__.'/auth.php';

require __DIR__.'/api.php';

