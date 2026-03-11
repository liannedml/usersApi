<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccinationController;

Route::get('/vaccinations', [VaccinationController::class, 'index']);
Route::post('/vaccinations', [VaccinationController::class, 'store']);
Route::get('/vaccinations/{id}', [VaccinationController::class, 'show']);
Route::put('/vaccinations/{id}', [VaccinationController::class, 'update']);
Route::delete('/vaccinations/{id}', [VaccinationController::class, 'destroy']);