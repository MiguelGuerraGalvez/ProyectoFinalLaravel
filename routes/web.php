<?php

use App\Http\Controllers\VideojuegosController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [VideojuegosController::class, 'index'])->name('videojuegos.index');
    Route::get('videojuegos/create', [VideojuegosController::class, 'create'])->name('videojuegos.create');
    Route::post('videojuegos', [VideojuegosController::class, 'store'])->name('videojuegos.store');
    Route::get('videojuegos/{videojuego}/edit', [VideojuegosController::class, 'edit'])->name('videojuegos.edit');
    Route::put('videojuegos/{videojuego}/update', [VideojuegosController::class, 'update'])->name('videojuegos.update');
    Route::get('videojuegos/{videojuego}/delete', [VideojuegosController::class, 'delete'])->name('videojuegos.delete');
    Route::delete('videojuegos/{videojuego}/destroy', [VideojuegosController::class, 'destroy'])->name('videojuegos.destroy');
});

require __DIR__.'/auth.php';
