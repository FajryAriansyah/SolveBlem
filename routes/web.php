<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SolveblemController;

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
    return view('solveblem.landing');
});

// authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



// Problem

Route::get('/problem/create', [ProblemController::class, 'create']);
Route::get('/problem', [ProblemController::class, 'showList']);
Route::get('/problem/{slug}', [ProblemController::class, 'index']);
Route::post('/problem/create/store', [ProblemController::class, 'store']);

// Constest

Route::get('/contest', [ContestController::class, 'index']);
Route::get('/contest/create', [ContestController::class, 'create']);
Route::post('/contest/store', [ContestController::class, 'store']);
