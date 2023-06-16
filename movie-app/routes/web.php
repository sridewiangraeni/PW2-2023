<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/movies/create', [MovieController::class, 'create']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']); 

Route::post('/movies', [MovieController::class, 'store']);

Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);

Route::put('/movies/{movie}', [MovieController::class, 'update']);

route::get('/genres', [GenreController::class, 'index']);
route::get('/genres/create', [GenreController::class, 'create']);
route::post('/genres', [GenreController::class, 'store']);  
route::delete('/genres/{genres}', [GenreController::class, 'destroy']);

route::get('/reviews', [ReviewController::class, 'reviews']);
route::get('/reviews/create', [ReviewController::class, 'create']);
route::post('/reviews', [ReviewController::class, 'store']);  
route::delete('/reviews/{reviews}', [ReviewController::class, 'destroy']);

Route::get('/movies',[MovieController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/genres/{genre}/edit', [GenresController::class, 'edit']);
