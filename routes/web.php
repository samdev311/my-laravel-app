<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;

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
Route::get('/logout',function () {
    return view('/task');
});
Route::get('/donate',function () {
    return view('/donate');
});
Route::post('/payment',[PaymentController::class, 'payment']);
Route::get('/payment',function (){
    return view('/donate');
});
