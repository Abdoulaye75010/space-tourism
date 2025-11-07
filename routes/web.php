<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\LanguageController;

/*
Toutes les routes sont multilingues (/fr et /en).
La langue par défaut est le français (/fr).
*/

// Redirige la racine du site vers /fr
Route::get('/', fn() => redirect('/fr'));

// Groupe de routes multilingues (fr / en)
foreach (['fr', 'en'] as $locale) {

    Route::prefix($locale)->group(function () use ($locale) {

        // Accueil
        Route::get('/', [HomeController::class, 'index'])->name($locale . '.home');

        // Destinations
        Route::get('/destinations', [DestinationController::class, 'index'])->name($locale . '.destinations.index');
        Route::get('/destinations/{id}', [DestinationController::class, 'show'])->name($locale . '.destinations.show');

        // Équipage
        Route::get('/crew', [CrewController::class, 'index'])->name($locale . '.crew.index');
        Route::get('/crew/{id}', [CrewController::class, 'show'])->name($locale . '.crew.show');

        // Technologies
        Route::get('/technology', [TechnologyController::class, 'index'])->name($locale . '.technology.index');
        Route::get('/technology/{id}', [TechnologyController::class, 'show'])->name($locale . '.technology.show');
    });
}

// Changement de langue (FR / EN)

Route::get('/lang/{locale}', [LanguageController::class, 'switch'])
    ->name('lang.switch');

// Cette route déclenche la méthode switch() de LanguageController
// Exemple d’URL : /lang/fr ou /lang/en
// Elle redirige ensuite l’utilisateur vers la même page dans la langue choisie

