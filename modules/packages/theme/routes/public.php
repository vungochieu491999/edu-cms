<?php

use Edumad\Theme\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'getIndex']);
