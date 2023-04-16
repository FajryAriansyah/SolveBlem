<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('solveblem/submissions', [SolveblemController::class, 'index']);

Route::get('solveblem/profiles/user/submission-history', [SolveblemController::class, 'create']);

Route::get('solveblem/profiles/user', [SolveblemController::class, 'user']);

Route::get('solveblem/contest', [SolveblemController::class, 'contest']);

Route::get('solveblem/your/contest', [SolveblemController::class, 'your_contest']);

Route::get('solveblem/user/contest', [SolveblemController::class, 'user_contest']);