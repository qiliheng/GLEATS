<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SWMSController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\MitigationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RiskAssessmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/projects', [ProjectController::class, 'store']);
Route::post('/swms', [SWMSController::class, 'store']);
Route::post('/risk-assessments', [RiskAssessmentController::class, 'store']);
Route::post('/audits', [AuditController::class, 'store']);
Route::post('/mitigations', [MitigationController::class, 'store']);

