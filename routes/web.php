<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('task');
});

Route::post('/register', [UserController::class, 'register']);

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/task', function () {
    return view('task');
});

Route::post('/login', [UserController::class, 'login']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/service', function () {
    return view('service');
});

Route::post('/logout', [UserController::class, 'logout']);
