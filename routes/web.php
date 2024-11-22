<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CellController;

Route::get('/', [CellController::class, 'index'])->name('cells.index');
Route::get('/cells/{id}/edit', [CellController::class, 'edit'])->name('cells.edit');
Route::post('/cells/{id}/update', [CellController::class, 'update'])->name('cells.update');
Route::delete('/cells/{id}/delete', [CellController::class, 'destroy'])->name('cells.delete');
Route::put('/cells/{id}', [CellController::class, 'update'])->name('cells.update');
Route::post('/cells/{id}/delete-link', [CellController::class, 'deleteLink'])->name('cells.deleteLink');
Route::get('/cells/{id}/edit-link', [CellController::class, 'editLink'])->name('cells.editLink');
Route::put('/cells/{id}/update-link', [CellController::class, 'updateLink'])->name('cells.updateLink');


