<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'index']);
Route::resource('projects', ProjectController::class);
Route::get('projects/{project}/confirm-delete', [ProjectController::class, 'confirmDelete'])->name('projects.confirmDelete');
