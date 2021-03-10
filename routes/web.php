<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class,'index']);
Route::resource('product',ProductController::class);
