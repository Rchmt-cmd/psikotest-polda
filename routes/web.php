<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Models\Jadwal;
use App\Models\SoalTes;
use Illuminate\Http\Request;
use App\Models\JawabanPeserta;
use function PHPSTORM_META\map;
use App\Http\Livewire\DaftarSoal;
use App\Http\Livewire\DaftarJadwal;
use App\Http\Livewire\DaftarPeserta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HalamanHasilTes;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\HalamanTesPeserta;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\EksportDataPeserta;
use App\Http\Controllers\SubmitTestController;
use App\Http\Livewire\SoalsKategori1;
use App\Http\Livewire\SoalsKategori2;
use App\Http\Livewire\SoalsKategori3;
use App\Repositories\SoalTes\SoalTesRepository;
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
    Route::get('/admin/soal-kategori-1', SoalsKategori1::class)->name('soal-kategori-1');
    Route::get('/admin/soal-kategori-2', SoalsKategori2::class)->name('soal-kategori-2');
    Route::get('/admin/soal-kategori-3', SoalsKategori3::class)->name('soal-kategori-3');
    Route::get('/admin/hasil-tes', HalamanHasilTes::class)->name('hasil-tes');

    Route::post('/tambah-jadwal', DaftarJadwal::class)->name('tambah-jadwal');
    Route::get('eksport-data-peserta', [EksportDataPeserta::class, 'export'])->name('eksport.data.peserta');

});

// Route User Page (Peserta)
Route::middleware('is_user')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/halaman-tes-peserta', HalamanTesPeserta::class)->middleware('test_running')->name('halaman.tes.peserta');
    
    // Route::get('/reset-password', [ResetPasswordController::class, 'index'])->name('reset-password');
    // Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('update-password');
});

Route::get('/reset-password', [ResetPasswordController::class, 'index'])->name('reset-password');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('update-password');
Auth::routes();
