<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/pasien', [PasienController::class, 'index']);

    Route::resource('pasien', PasienController::class);
    Route::delete('pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasien.destroy');


    Route::get('pasien/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('pasien/store', [PasienController::class, 'store'])->name('pasien.store');

    Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/pasien/{pasien}', [PasienController::class, 'update'])->name('pasien.update');

    Route::get('/pasien/{pasien}', [PasienController::class, 'show'])->name('pasien.show');

    //kelurahan
    Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
    Route::get('kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahan.create');
    Route::post('kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
    Route::resource('kelurahan', KelurahanController::class);
    Route::delete('kelurahan/{kelurahan}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');


});

require __DIR__.'/auth.php';
