<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Hered is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});


Route::get('/user-create-contest', function () {
    return view('user-create-contest');
});

Route::get('/problem', function() {
    return view('problem');
});
Route::get('/create-problem', function() {
    return view('create-problem');
});

