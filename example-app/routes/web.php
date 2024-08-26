<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route to display a specific property by its ID
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');

// Route to handle property creation
Route::post('/property', [PropertyController::class, 'store'])->name('property.store');

// Route to handle property update
Route::put('/property/{id}', [PropertyController::class, 'update'])->name('property.update');

// Route to handle property deletion
Route::delete('/property/{id}', [PropertyController::class, 'destroy'])->name('property.destroy');

// Default route, redirecting to a property with a specific ID for testing purposes
// Route::get('/', function () {
//     return redirect()->route('property.show', ['id' => 10]); // Replace 1 with an actual property ID that exists in your database
// });

Route::get('/home', [PropertyController::class, 'index'])->name('home');
Route::get('/listing6', function () {
    return view('listing6');
});
Route::get('/data', function () {
    return view('dashboard-add-listing');
});
// Route::get('/listing', [PropertyController::class, 'listing'])->name('listing');
Route::get('/properties/search', [PropertyController::class, 'search'])->name('properties.search');
Route::get('/listing6', [PropertyController::class, 'search'])->name('search');
Route::post('/storeUser', [UserController::class, 'store'])->name('storeUser');
Route::post('/userLogin', [UserController::class, 'login'])->name('userLogin');
