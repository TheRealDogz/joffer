<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;


Route::get('/jobs', [JobsController::class, 'list']);
Route::get('/jobs/{id}', [JobsController::class, 'detail']);
Route::post('/jobs', [JobsController::class, 'create']);
Route::put('/jobs/{id}', [JobsController::class, 'modify']);
Route::delete('/jobs/{id}', [JobsController::class, 'delete']);
