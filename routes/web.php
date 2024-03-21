<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard', function () {
    return view('dashboard.criteria.main');
});
Route::get('/dashboard/criteria', function () {
    return view('dashboard.criteria.main');
});
Route::get('/dashboard/criteriaWeight', function () {
    return view('dashboard.criteriaWeight.main');
});
Route::get('/dashboard/alternative', function () {
    return view('dashboard.alternative.main');
});
Route::get('/dashboard/alternativeWeight', function () {
    return view('dashboard.alternativeWeight.main');
});
