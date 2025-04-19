<?php

use App\Http\Controllers\ProductController;

Route::get('/product/{id}', [ProductController::class, 'show']);
