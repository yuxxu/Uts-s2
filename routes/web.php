<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
})->name('home');

//pts routes

Route::get('/dashboard', [DashboardController::class, 'index']);

//karyawan
Route::get('/indexkaryawan', [KaryawanController::class, 'index']);
Route::get('/tambahkaryawan', [KaryawanController::class, 'tambahkaryawan']);
Route::post('/karyawan', [KaryawanController::class, 'karyawan']);

Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

Route::get('/karyawan', [KaryawanController::class, 'show'] );

Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::put('/karyawan/{id}/edit', [KaryawanController::class, 'update']);

Route::resource('karyawan', KaryawanController::class);



