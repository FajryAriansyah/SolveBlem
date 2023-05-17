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


// Route::get('solveblem/submissions', [SolveblemController::class, 'index']);

// Route::get('solveblem/profiles/user/submission-history', [SolveblemController::class, 'create']);

Route::get('solveblem/profiles/user', [SolveblemController::class, 'user']);

// Route::get('solveblem/user/contest', [SolveblemController::class, 'contest']);

Route::get('/', function () {
    return view('solveblem/landing');
});

Route::get('solveblem', function () {
    return view('solveblem/landing');
});


// Route::get('/user-create-contest', function () {
//     return view('solveblem/user-create-contest');
// });

// Route::get('/problem', function () {
//     return view('solveblem/problem');
// });
// Route::get('solveblem/create-problem', function () {
//     return view('solveblem/create-problem');
// });



// authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Problem

Route::get('/problem/create', [ProblemController::class, 'create']);
Route::get('/problem', [ProblemController::class, 'showList']);
Route::get('/problem/{slug}', [ProblemController::class, 'index']);
Route::post('/problem/create/store', [ProblemController::class, 'store']);

// Constest

Route::get('/contest/create/problem', [ContestController::class, 'create_problem']);
Route::get('/contest', [ContestController::class, 'index']);
Route::get('/contest/create', [ContestController::class, 'create']);
Route::get('/contest/participant', [ContestController::class, 'participantContest']);
Route::post('/contest/store', [ContestController::class, 'store']);

// About
Route::get('/about', [SolveblemController::class, 'about']);