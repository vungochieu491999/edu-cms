<?php

use Edumad\Theme\Http\Controllers\PublicController;
Route::group(['middleware' => 'web'], function () {
    Route::get('/',[PublicController::class,'getIndex']);

    Route::get('/home',[PublicController::class,'getIndex']);
});
