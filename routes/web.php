<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
// Route::resource('project', 'ProjectController');

require __DIR__.'/auth.php';
