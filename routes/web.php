<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporanController;
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

Route::get('/', function () {return view('welcome');});

Route::get('laporan1',[laporanController::class, 'show']);
Route::get('laporan2',[laporanController::class, 'show2']);
Route::get('laporan3',[laporanController::class, 'show3']);
Route::get('laporan4',[laporanController::class, 'show4']);
Route::get('/punch_card/{id}', [LaporanController::class, 'detail'])->name('laporan.detail');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
