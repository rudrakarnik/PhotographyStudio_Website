<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\assignController;

Route::get('/', [assignController::class, 'index']);
Route::get('/about', [assignController::class, 'about']);
Route::get('/service', [assignController::class, 'service']);
Route::get('/contact', [assignController::class, 'contact']);
?>