<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormDataController;
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



Route::get('/', [FormDataController::class, 'index'])->name('form.index');
Route::get('/form-view', [FormDataController::class, 'form'])->name('form.create');
Route::post('/form', [FormDataController::class, 'store'])->name('form.store');
Route::get('/form/{id}', [FormDataController::class, 'show'])->name('form.show');
Route::get('/form/{id}/edit', [FormDataController::class, 'edit'])->name('form.edit');
Route::put('/form/{id}', [FormDataController::class, 'update'])->name('form.update');
Route::delete('/form/{id}', [FormDataController::class, 'destroy'])->name('form.destroy');