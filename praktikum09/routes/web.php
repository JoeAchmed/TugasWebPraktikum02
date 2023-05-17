<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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
    return view('welcome');
});

// Bikin route kabar untuk nampilin view di folder view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

// Bikin route nilai untuk nampilin view di folder view nilai
Route::get('/nilai', function () {
    return view('nilai');
});

// Bikin route pasien untuk nampilin view di folder view pasien
Route::get('/pasien', function () {
    return view('pasien');
});

// Bikin route form
Route::get('/form', [FormController::class, 'index']);

// Route hasil request form
Route::post('/hasil', [FormController::class, 'hasil']);

// Route form skill
Route::get('/skill', [SkillController::class, 'index']);

// Route hasil request form skill
Route::post('/skillhasil', [SkillController::class, 'skillHasil']);
