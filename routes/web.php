<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CrewController;

// Accueil
Route::get('/', fn() => view('home'))->name('home');

// Destinations
Route::get('/destinations/{planet?}', [DestinationController::class, 'show'])->name('destinations');

// Crew (page principale)
Route::get('/crew', [CrewController::class, 'index'])->name('crew');

Route::get('/technology', fn() => view('technology.index'))->name('technology'); 

// Pages individuelles des membres
Route::get('/crew/douglas-hurley', [CrewController::class, 'douglasHurley'])->name('crew.douglas-hurley');
Route::get('/crew/mark-shuttleworth', [CrewController::class, 'markShuttleworth'])->name('crew.mark-shuttleworth');
Route::get('/crew/victor-glover', [CrewController::class, 'victorGlover'])->name('crew.victor-glover');
Route::get('/crew/anousheh-ansari', [CrewController::class, 'anoushehAnsari'])->name('crew.anousheh-ansari');