<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PengeluaranController;

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
    return view('auth/login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('/gudang', GudangController::class);
    Route::post('/gudang/update/{id}', [GudangController::class, 'update']);
    Route::get('/gudang/destroy/{id}', [GudangController::class, 'destroy']);

    Route::resource('/produk', ProdukController::class);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/destroy/{id}', [ProdukController::class, 'destroy']);

    Route::resource('/member', MemberController::class);
    Route::post('/member/update/{id}', [MemberController::class, 'update']);
    Route::get('/member/destroy/{id}', [MemberController::class, 'destroy']);

    Route::resource('/pengeluaran', PengeluaranController::class);
    Route::post('/pengeluaran/update/{id}', [PengeluaranController::class, 'update']);
    Route::get('/pengeluaran/destroy/{id}', [PengeluaranController::class, 'destroy']);
});
