<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\laporanController2;
use App\Http\Controllers\laporanController3;
use App\Http\Controllers\laporanController4;
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

Route::get('/laporan1', function () {
    return view('laporan1');
});

Route::get('/laporan2', function () {
    return view('laporan2');
});
Route::get('/laporan3', function () {
    return view('laporan3');
});
Route::get('/laporan4', function () {
    return view('laporan4');
});
Route::get('/punchcard/{{ $user->NAMA }}}', function ($slug) {
    $post= $slug;
    return view('punchcard',['post' => $post]);
})-> where('post','[A-z_-@]+');


Route::get('laporan1',[laporanController::class, 'show']);
Route::get('laporan2',[laporanController2::class, 'show2']);
Route::get('laporan3',[laporanController3::class, 'show3']);
Route::get('laporan4',[laporanController4::class, 'show4']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
