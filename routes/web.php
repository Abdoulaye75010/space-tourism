<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\TechnologyController;

// Accueil
Route::get('/', fn() => view('home'))->name('home');


// Pages individuelles des membres
Route::get('/crew/douglas-hurley', [CrewController::class, 'douglasHurley'])->name('crew.douglas-hurley');
Route::get('/crew/mark-shuttleworth', [CrewController::class, 'markShuttleworth'])->name('crew.mark-shuttleworth');
Route::get('/crew/victor-glover', [CrewController::class, 'victorGlover'])->name('crew.victor-glover');
Route::get('/crew/anousheh-ansari', [CrewController::class, 'anoushehAnsari'])->name('crew.anousheh-ansari');

Route::get('/technology', [TechnologyController::class, 'index'])->name('technology.index');
Route::get('/technology/{id}', [TechnologyController::class, 'show'])->name('technology.show');

Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('/destinations/{id}', [DestinationController::class, 'show'])->name('destinations.show');

