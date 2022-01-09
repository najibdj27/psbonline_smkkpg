<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController;

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
    return view('index');
})->middleware('guest')->name('index');

// Checking
Route::get('/check/{pass}', [PendaftarController::class, 'index']);

//Admin
//

// Pendaftar
Route::get('/dashboard', [PendaftarController::class, 'dashboard'])->middleware('auth')->name('dashboard_pendaftar');
Route::get('/profile', [PendaftarController::class, 'show'])->middleware('auth')->name('profile');
Route::post('/daftar', [PendaftarController::class, 'store']);
Route::patch('/pendaftar/{pendaftar}/{user}', [PendaftarController::class, 'update'])->middleware('auth');
Route::get('/daftar', [PendaftarController::class, 'create'])->middleware('guest')->name('daftar');
// Auth
Route::get('/login', [PendaftarController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [PendaftarController::class, 'authenticate']);
Route::get('/logout', [PendaftarController::class, 'logout'])->middleware('auth')->name('logout');
