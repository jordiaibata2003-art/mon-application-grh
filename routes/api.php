<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeController;
use App\Http\Controllers\Api\ContratController;
use App\Http\Controllers\Api\CongeController;
use App\Http\Controllers\Api\PaieController;
use App\Http\Controllers\Api\PresenceController;
use App\Http\Controllers\Api\ProfilController;
use App\Http\Controllers\Api\AuthController;

// Seule route publique
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/user', [AuthController::class, 'me']);

    // Lecture : admin, rh, manager (le manager peut aussi modifier un congé pour le valider)
    Route::middleware('role:admin,rh,manager')->group(function () {
        Route::apiResource('employes', EmployeController::class)->only(['index', 'show']);
        Route::apiResource('contrats', ContratController::class)->only(['index', 'show']);
        Route::apiResource('conges', CongeController::class)->only(['index', 'show', 'update']);
        Route::apiResource('presences', PresenceController::class)->only(['index', 'show']);
    });

    // Écriture : admin, rh
    Route::middleware('role:admin,rh')->group(function () {
        Route::apiResource('employes', EmployeController::class)->except(['index', 'show']);
        Route::apiResource('contrats', ContratController::class)->except(['index', 'show']);
        Route::apiResource('conges', CongeController::class)->except(['index', 'show', 'update']);
        Route::apiResource('presences', PresenceController::class)->except(['index', 'show']);
        Route::apiResource('paies', PaieController::class);
        Route::apiResource('profils', ProfilController::class)->only(['index']);
    });
});