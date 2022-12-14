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
Route::get('/sd', [MainController::class, "index"])->name("user-profile");
Route::get('/sd1', [MainController::class, "index"])->name("user-management");
Route::get('/sd2', [MainController::class, "index"])->name("tables");
Route::get('/sd3', [MainController::class, "index"])->name("billing");
Route::get('/sd4', [MainController::class, "index"])->name("virtual-reality");
Route::get('/sd5', [MainController::class, "index"])->name("rtl");
Route::get('/sd6', [MainController::class, "index"])->name("static-sign-in");
Route::get('/sd7', [MainController::class, "index"])->name("static-sign-up");
Route::get('/sd8', [MainController::class, "index"])->name("notifications");
Route::get('/sd9', [MainController::class, "index"])->name("profile");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
