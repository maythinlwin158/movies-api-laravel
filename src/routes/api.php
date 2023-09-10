<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TagController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('/genres', [GenreController::class, 'index'])->name('index');
Route::get('/authors', [AuthorController::class, 'index'])->name('index');
Route::get('/tags', [TagController::class, 'index'])->name('index');

Route::resource('/movies', MovieController::class)->only([
    'index', 'show'
]);

Route::post('/movies/{movie}/comments', [CommentController::class, 'store']);

Route::middleware(['auth:api'])->group(function () {
    Route::resource('/movies', MovieController::class)->only([
        'store', 'destroy'
    ]);

    Route::post('/movies/{movie}', [MovieController::class, 'update'])->name('update');
    Route::post('logout', [AuthController::class, 'logout']);
});
