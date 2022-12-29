<?php

use Illuminate\Http\Request;
use App\Http\Livewire\DaftarSoal;
use App\Http\Livewire\DaftarJadwal;
use App\Http\Livewire\DaftarPeserta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;

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

// Route Landing Page
Route::get('/', function () {
    return view('welcome');
})->name('landing-page');

// Route Admin Site
Route::middleware('is_admin')->group(function () {
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/daftar-peserta', DaftarPeserta::class)->name('daftar-peserta');
    Route::get('/admin/daftar-soal', DaftarSoal::class)->name('daftar-soal');
    Route::post('/tambah-jadwal', DaftarJadwal::class)->name('tambah-jadwal');
});

// Route User Page (Peserta)
Route::middleware('is_user')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Auth::routes();
