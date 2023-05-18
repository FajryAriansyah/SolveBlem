<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SolveblemController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ContestProblemController;

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
// Home
Route::get('/', function () {return view('solveblem.landing');});
// Authentication
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

//Problem Answer
Route::post('problem/{problem:slug}/store',[AnswerController::class, 'store']);

// Constest
Route::get('/contest', [ContestController::class, 'index']);
Route::post('/contest/store', [ContestController::class, 'store'])->name('contest-store');
Route::get('/contest/create', [ContestController::class, 'create']);
Route::get('/contest/{contest:slug}', [ContestController::class, 'show']);
Route::get('/contest/{contest:slug}/create/problem', [ContestController::class, 'problem']);

// Contest : Create Problem
Route::get('/contest/{Cslug}/{Pslug}', [ContestProblemController::class, 'show']);
Route::get('/contest/{contest:slug}/create/problem/select', [ContestProblemController::class, 'problem']);
Route::get('/contest/{cSlug}/create/problem/select/{pSlug}', [ContestProblemController::class, 'storeProblem']);
Route::get('/contest/{contest:slug}/create/problem/create', [ContestProblemController::class, 'index']);
Route::post('/contest/{contest:slug}/create/problem/store', [ContestProblemController::class, 'store']);

// Contest : Answer Problem
Route::post('/contest/{Cslug}/{Pslug}/store', [AnswerController::class, 'store']);

// Contest : Participant
Route::post('/contest/enter', [ParticipantController::class,'enter']);

// User
Route::get('/profiles/{user:username}', [ProfileController::class, 'index']);

//About
Route::get('/about', [SolveblemController::class, 'about']);

// Buka visual

Route::get('/buka/visual', [SolveblemController::class, 'visual']);
