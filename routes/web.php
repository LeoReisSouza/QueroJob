<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Projects\Index;
use App\Http\Controllers\ProjectsController;

Route::get('/projects', [ProjectsController::class, 'index']); 

Route::get('/', WelcomeController::class);

Route::get('/', [WelcomeController::class, 'index']);
