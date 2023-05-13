<?php

use App\Http\Controllers\AdminController;
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


Route::group([
    'prefix' => '/',
    'controller' => AdminController::class,
    'middleware' => ['auth', 'verified']
], function () {
    Route::get('/', function () {
        redirect('/login');
    });
    Route::get('/dashboard', 'indexDashboard');

    Route::prefix('pemasukan')->group(function () {
        Route::get('/', 'indexPemasukan');
        Route::post('/', 'storePemasukan');
    });

    Route::prefix('pengeluaran')->group(function () {
        Route::get('/', 'indexpengeluaran');
        Route::post('/', 'storepengeluaran');
    });
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
