<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)->group(function(){
    Route::get('/', 'showUsers')->name('home');
    Route::get('/user/{id?}', 'singleUser')->name('view.user')->whereNumber('id');
    Route::post('/add', 'addUser')->name('addUser');
    Route::put('/update/{id}', 'updateUser')->name('update.user');
    Route::get('/updatepage/{id?}', 'updatePage')->name('update.page')->whereNumber('id');
    Route::get('/delete', 'deleteUser');
});

Route::view('newuser','/addUser');