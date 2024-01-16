<?php

use Illuminate\Support\Facades\Route;
use Volodymyr0587\Posts\Http\Controllers\PostController;


Route::get('/posts-package', [PostController::class, 'index']);
