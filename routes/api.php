<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AllergyController;
use App\Http\Controllers\LabResultController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\VitalSignController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('patients', PatientController::class);
Route::apiResource('medical-records', MedicalRecordController::class);
Route::apiResource('appointments', AppointmentController::class);
Route::apiResource('allergies', AllergyController::class);
Route::apiResource('lab-results', LabResultController::class);
Route::apiResource('medications', MedicationController::class);
Route::apiResource('vital-signs', VitalSignController::class);
