<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SudutController;
use App\Models\Sudut;

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


Route::controller(SudutController::class)->group(function () {
    Route::get('/informasi', 'informasi')->name('informasi');
    Route::get('/informasi-entry', 'create')->name('informasi.informasi-entry');
    Route::post('/informasi-entry', 'store')->name('informasi.store');
    Route::get('informasi/{id_informasi}/edit', 'edit')->name('informasi.edit');
    Route::put('informasi/{id_informasi}', 'update')->name('informasi.update');
    Route::get('informasi/{id_informasi}/hapus', 'delete')->name('informasi.hapus');
    Route::delete('informasi/{id_informasi}/destroy', 'destroy')->name('informasi.destroy');


});
