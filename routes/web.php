<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 重複していたルートを削除
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/profile/create', 'Admin\ProfileController@add');
Route::get('admin/profile/edit', 'Admin\ProfileController@edit');

Route::get('XXX', 'AAAController@bbb');
