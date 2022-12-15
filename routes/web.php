<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [MainController::class, "index"]);

Route::middleware(['auth'])->group(function () {
    Route::get("/commander", [MainController::class, "commander"])->name("commander");
    Route::get("/books", [MainController::class, "books"])->name("books");
    Route::get("/abonnement", [MainController::class, "abonnement"])->name("abonnement");
    Route::get("/emprunts", [MainController::class, "emprunts"])->name("emprunts");
});


Route::get("/admin", [MainController::class, "dashboard"])->name("admin");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
