<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('task');
});

Route::post('/register',[Usercontroller::class,'register']);

Route::get('/signup',function(){
    return view('signup');
});
Route::get('/task',function(){
return view('task');
});
Route::post('/login',[Usercontroller::class,'login']);
Route::get('/login',function(){
    return view('login');
});
Route::get('/service',function(){
    return view('service');
});
Route::post('/logout',[Usercontroller::class,'logout']);