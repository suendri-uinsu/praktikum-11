<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);
Route::patch('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy']);
