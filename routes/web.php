<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', [JobsController::class, 'index']);
