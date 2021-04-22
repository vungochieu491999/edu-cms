<?php

use Edumad\Backend\Http\Controllers\Auth\LoginController;
use Edumad\Backend\Http\Controllers\Auth\RegisterController;
use Edumad\Backend\Http\Controllers\DashboardController;
use Edumad\Backend\Http\Controllers\UserController;

Route::group(['namespace' => 'Edumad\Backend\Http\Controllers\Auth','middleware' => 'web'], function () {
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('public.member.login');
    Route::post('/login',[LoginController::class,'login']);

    Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('public.member.register');
    Route::post('/register',[RegisterController::class,'register']);

    Route::get('/logout',[LoginController::class,'logout'])->name('public.member.logout');
});

Route::group(['namespace' => 'Edumad\Backend\Http\Controllers', 'middleware' => ['web','auth']], function () {
    Route::group(['prefix' => config('core.base.general.admin_dir')], function () {
        Route::get('/dashboard',[DashboardController::class,'getIndex'])->name('dashboard.index');

        Route::get('/user/profile/{id}',[UserController::class,'getIndex'])->name('user.profile');
    });
});
