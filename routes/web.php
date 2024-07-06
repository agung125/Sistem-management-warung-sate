<?php

use App\Http\Controllers\Admin\BahanBakuController;
use App\Http\Controllers\Admin\InventarisController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/inventaris', [InventarisController::class, 'index'])->name('admin.inventaris.index');
    Route::get('/cart', [InventarisController::class, 'cart'])->name('admin.inventaris.cart');

    //bahan baku
    Route::get('/bahanbaku', [BahanBakuController::class, 'index'])->name('admin.bahanbaku.index');
    Route::post('/tambahbahanbaku', [BahanBakuController::class, 'store'])->name('admin.bahanbaku.store');
});

require __DIR__.'/auth.php';
