<?php

use Edumad\Backend\Http\Controllers\UserController;

Route::group(['namespace' => 'Edumad\Backend\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(['prefix' => config('core.base.general.admin_dir')], function () {
        Route::get('/dashboard',[UserController::class,'getIndex']);
    });
});
