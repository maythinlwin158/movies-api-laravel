<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/genres', [GenreController::class, 'index'])->name('index');
Route::get('/authors', [AuthorController::class, 'index'])->name('index');
Route::get('/tags', [TagController::class, 'index'])->name('index');

// Registration and Login
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Protected routes with middleware
Route::middleware(['auth:api'])->group(function () {
    // Get user details
    Route::get('user', 'AuthController@user');

    Route::resource('/movies', MovieController::class);

    // Logout user
    Route::post('logout', 'AuthController@logout');
});

// If you want to provide a route for refreshing tokens
Route::post('refresh', 'AuthController@refresh');
