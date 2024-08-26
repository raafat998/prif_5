<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RenterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Property\Property;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('roles',RoleController::class);
Route::apiResource('users',UserController::class);
Route::apiResource('clients',ClientController::class);
Route::apiResource('renters',RenterController::class);
Route::apiResource('properties',PropertyController::class);
Route::apiResource('bookings',BookingController::class);
Route::apiResource('reviews',ReviewController::class);
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');
