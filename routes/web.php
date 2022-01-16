<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\AdminController;

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
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('dashboard_admin');
Route::get('/admin/profile', [AdminController::class, 'show'])->middleware('auth')->name('profile_admin');
Route::put('/admin/{admin}/{user}', [AdminController::class, 'update'])->middleware('auth');
Route::get('/admin/create', [AdminController::class, 'create'])->name('create_admin');
Route::post('/admin/create', [AdminController::class, 'store']);

// Pendaftar
Route::get('/dashboard', [PendaftarController::class, 'dashboard'])->middleware('auth')->name('dashboard_pendaftar');
Route::get('/profile', [PendaftarController::class, 'show'])->middleware('auth')->name('profile_pendaftar');
Route::post('/daftar', [PendaftarController::class, 'store']);
Route::put('/pendaftar/{pendaftar}/{user}', [PendaftarController::class, 'update'])->middleware('auth');
Route::get('/daftar', [PendaftarController::class, 'create'])->middleware('guest')->name('daftar');

//Prestasi
Route::post('/pendaftar/prestasi/{pendaftar}', [PrestasiController::class, 'store'])->middleware('auth');
Route::delete('/pendaftar/prestasi/{prestasi}', [PrestasiController::class, 'destroy'])->middleware('auth');
Route::put('/pendaftar/prestasi/{prestasi}', [PrestasiController::class, 'update'])->middleware('auth');

//Pesan
Route::get('/messages', [PesanController::class, 'pendaftar'])->middleware('auth')->name('messages_pendaftar');

// Auth
Route::get('/login', [PendaftarController::class, 'login'])->middleware('guest')->name('login');
Route::get('/admin/login', [AdminController::class, 'login'])->middleware('guest')->name('login_admin');
Route::post('/login', [PendaftarController::class, 'authenticate']);
Route::post('admin/login', [AdminController::class, 'authenticate']);
Route::get('/logout', [PendaftarController::class, 'logout'])->middleware('auth')->name('logout');

// Settings
Route::get('admin/settings', [AdminController::class, 'settings'])->middleware('auth')->name('settings_pendaftaran');
Route::put('admin/settings', [AdminController::class, 'settings_update']);
