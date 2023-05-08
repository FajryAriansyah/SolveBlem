<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ProblemController;
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
    return view('layouts.main');
});

// Route::get('/', function () {
//     return view('solveblem/landing');
// });

Route::get('/user-create-contest', function () {
    return view('solveblem/user-create-contest');
});

Route::get('solveblem/create-problem', function() {
    return view('solveblem/create-problem');
});


// Problem
Route::get('/problem/create', [ProblemController::class, 'create']);
Route::get('/problem', [ProblemController::class, 'showList']);
Route::get('/problem/{slug}', [ProblemController::class, 'index']);
Route::post('/problem/create/store', [ProblemController::class, 'store']);

// Constest

Route::get('/contest', [ContestController::class, 'index']);