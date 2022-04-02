<?php

use App\Http\Controllers\MasukController;
use App\Models\InfaqMasuk;
use App\Models\Infaqkeluar;
use App\Models\RekapitulasiData;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\DashboardPostController;






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
    return view('home', [
        "title" => "Home",
       
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('dashboard.index',[
        "title" => "Dashboard"
    ]);
})->middleware('auth');
Route::get('/dashboard/rekapitulasidata-pdf', [RekapitulasiController::class, 'rekapitulasiPrint'])->middleware('auth');
Route::resource('infaqmasuk', MasukController::class)->middleware('auth');
Route::resource('infaqkeluar', KeluarController::class)->middleware('auth');
Route::resource('rekapitulasidata', RekapitulasiController::class)->middleware('auth');
Route::resource('setoran', SetoranController::class)->middleware('auth');