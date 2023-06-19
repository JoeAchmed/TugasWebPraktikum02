<?php

// Panggil controller nya
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TampilanController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    // Routing ke dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    // Routing ke produk
    Route::get('/produk', [ProdukController::class, 'index']);
    // Routing ke form create produk
    Route::get('/produk/create', [ProdukController::class, 'create']);
    // Routing tambah data fungsi store
    Route::post('/produk/store', [ProdukController::class, 'store']);
    // Routing ke form edit produk
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    // Routing edit data fungsi update
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
    // Routing untuk hapus produk
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');