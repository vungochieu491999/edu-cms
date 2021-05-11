<?php

use Edumad\Backend\Http\Controllers\Auth\LoginController;
use Edumad\Backend\Http\Controllers\Auth\RegisterController;
use Edumad\Backend\Http\Controllers\DashboardController;
use Edumad\Backend\Http\Controllers\UserController;

Route::group(['prefix' => config('core.base.general.admin_dir'), 'middleware' => 'web'], function () {

    Route::group(['namespace' => 'Edumad\Backend\Http\Controllers\Auth'], function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('public.member.login');
        Route::post('/login', [LoginController::class, 'login']);

        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('public.member.register');
        Route::post('/register', [RegisterController::class, 'register']);

        Route::get('/logout', [LoginController::class, 'logout'])->name('public.member.logout');
    });


    Route::group([['namespace' => 'Edumad\Backend\Http\Controllers'],'middleware' => ['auth','guest']], function () {
        Route::get('/dashboard',[DashboardController::class,'getIndex'])->name('dashboard.index');

        Route::get('/users/view',[UserController::class,'getIndex'])->name('users.view');
        Route::get('/users/profile/{id}',[UserController::class,'getProfile'])->name('users.profile');

        Route::get('/users/add-form',[UserController::class,'create'])->name('users.form.add');
        Route::post('/users/add-form',[UserController::class,'store']);

        Route::get('/users/edit-form/{id}',[UserController::class,'edit'])->name('users.form.edit');
        Route::post('/users/edit-form/{id}',[UserController::class,'update']);

        Route::post('/users/delete/{id}',[UserController::class,'delete'])->name('users.delete');

        Route::get('/users/trash-view',[UserController::class,'trashView'])->name('users.trash.view');
        Route::post('/users/trash-delete/{id}',[UserController::class,'trashDelete'])->name('users.trash.delete');
        Route::post('/users/trash-restore/{id}',[UserController::class,'trashRestore'])->name('users.trash.restore');
        Route::post('/users/trash-confirm-delete/{id}',[UserController::class,'trashConfirmDelete'])->name('users.trash.confirm-delete');

    });
});
