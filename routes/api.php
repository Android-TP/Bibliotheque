<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Abonnement\AbonnementController;
use App\Http\Controllers\User\DetailUserController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\CommandeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::controller(AbonnementController::class)->group(function () {
//     Route::post("/abonnement", "store");
//     Route::get("/abonnement",'index');
//     Route::get("/abonnement/{id}", 'show')->where('id', '[0-9]+');
// });
Route::middleware("auth:sanctum")->group(function () {
Route::resource('commande', CommandeController::class)->except(["create", "edit"]);
Route::resource('abonnement', AbonnementController::class)->except(["create", "edit"]);
Route::resource('detail_user', DetailUserController::class)->except(["create", "edit"]);
Route::resource('emprunt', EmpruntController::class)->except(["create", "edit"]);
Route::resource('role', RoleController::class)->except(["create", "edit"]);

});
