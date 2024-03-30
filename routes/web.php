<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CalculationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('profile-kelompok.main');
});

// Criteria
Route::get('/dashboard', [CriteriaController::class, 'index']);
Route::get('/dashboard/criteria', [CriteriaController::class, 'index']);
Route::post('/dashboard/criteria/added', [CriteriaController::class, 'store']);
Route::put('/dashboard/criteria/update/{criteria}', [CriteriaController::class, 'update']);
Route::delete('/dashboard/criteria/delete/{criteria}', [CriteriaController::class,'destroy'])->name('criterias.destroy');

Route::get('/dashboard/criteriaWeight', [CriteriaController::class, 'show']);
Route::put('/dashboard/criteriaWeight/added/{criterion1}', [CriteriaController::class, 'addWeight']);

// Alternative 
Route::get('/dashboard/alternative', [AlternativeController::class, 'index']);
Route::post('/dashboard/alternative/added', [AlternativeController::class, 'store']);
Route::put('/dashboard/alternative/update/{alternative}', [AlternativeController::class, 'update']);
Route::delete('/dashboard/alternative/delete/{alternative}',[AlternativeController::class,'destroy'])->name('alternatives.destroy');

Route::get('/dashboard/alternativeWeight', [AlternativeController::class, 'show']);
Route::put('/dashboard/alternativeWeight/added/{alternative}', [AlternativeController::class, 'addWeight']);

// Calculation
Route::get('/dashboard/calculate', [CalculationController::class, 'index']);
