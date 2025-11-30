<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PlanetController;
use App\Http\Controllers\Admin\CrewController;
use App\Http\Controllers\Admin\TechnologyController;

// ---------------------------------------------
// Création Admin (temporaire)
// ---------------------------------------------
Route::get('/create-admin', function () {
    $user = App\Models\User::firstOrCreate(
        ['email' => 'admin@example.com'],
        [
            'name' => 'Admin',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]
    );
    $user->assignRole('Administrateur');
    return 'Administrateur créé avec succès !';
});

// ---------------------------------------------
// Pages publiques
// ---------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

// Dashboard utilisateur Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth', 'verified'])
->name('dashboard');

// ---------------------------------------------
// Routes Breeze
// ---------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// =================================================================
//  ADMIN — sécurisé par rôle Administrateur
// =================================================================
Route::middleware(['auth', 'role:Administrateur'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard.index');
        })->name('dashboard');

        // =======================
        // CRUD Planètes
        // =======================
        Route::resource('planets', PlanetController::class)->except(['show']);

        // =======================
        // CRUD Crew
        // =======================
        Route::resource('crew', CrewController::class)->except(['show']);

        // =======================
        // CRUD Technologies
        // =======================
        Route::resource('technologies', TechnologyController::class)->except(['show']);
    });
