<?php

use Illuminate\Support\Facades\Route;

// Toutes les routes admin protégées par login + rôle admin
Route::middleware(['auth', 'role:Administrateur'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard.index');
        })->name('dashboard');

    });