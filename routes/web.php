<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;


Route::get('/', function () {
    return view('index');
});
Route::get('/login', [VoteController::class, 'login']);
Route::get('/signup', [VoteController::class, 'signup']);
Route::post('/signupRegister', [VoteController::class, 'signupRegister']);
Route::post('/loginUser', [VoteController::class, 'loginUser']);