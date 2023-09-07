<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


  
Route::get('/', [UserController::class,'showUsers']);
Route::get('/user/{id?}', [UserController::class,'singleUser'])->name('view.user')->whereNumber('id');
Route::get('/add', [UserController::class,'addUser']);
Route::get('/update', [UserController::class,'updateUser']);
Route::get('/delete', [UserController::class,'deleteUser']);