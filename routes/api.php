<?php

use App\Http\Controllers\Planet\PlanetController;
use App\Http\Controllers\Planet\PlanetEntitiesController;
use App\Http\Controllers\Planet\PlanetItemsController;
use App\Http\Controllers\Planet\PlanetMaterialsController;
use App\Http\Controllers\Planet\PlanetPhenomenasController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'ability:read'])->group(function () {
    Route::get('/planets', [PlanetController::class, 'index']);
    Route::get('/planet/{planet}', [PlanetController::class, 'show']);

    Route::get('/planet/{planet}/materials', PlanetMaterialsController::class);
    Route::get('/planet/{planet}/entities', PlanetEntitiesController::class);
    Route::get('/planet/{planet}/items', PlanetItemsController::class);
    Route::get('/planet/{planet}/phenomenas', PlanetPhenomenasController::class);
});

Route::middleware(['auth:sanctum', 'ability:manage'])->group(function () {
    // TODO: Routes that manages user and game progress
});
