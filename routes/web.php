<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/form', function () {
    return view('from');
})->name('form');

Route::get('/alert', function () {
    return view('alert');
})->name('alert');

Route::get('/', [BlogController::class, 'index'])->name('index');
Route::post('store', [BlogController::class, 'store'])->name('store');
Route::get('edit/{id}', [BlogController::class, 'edit'])->name('edit');
Route::post('update/{id}', [BlogController::class, 'update'])->name('update');
Route::delete('delete/{id}', [BlogController::class, 'delete'])->name('delete');
