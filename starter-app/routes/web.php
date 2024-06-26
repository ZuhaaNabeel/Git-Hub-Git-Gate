<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;

Route::get('/', [postcontroller::class, 'index']);
Route::get('/detail', [postcontroller::class, 'index']);
