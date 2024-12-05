<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;

Route::get('/', [PatientController::class, 'index'])->name('patients.index'); // List all patients
Route::get('/create', [PatientController::class, 'create'])->name('patients.create'); // Show the create form
Route::post('/', [PatientController::class, 'store'])->name('patients.store'); // Store new patient
Route::get('/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit'); // Show edit form
Route::put('/{patient}', [PatientController::class, 'update'])->name('patients.update'); // Update patient
Route::delete('/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy'); // Delete patient
