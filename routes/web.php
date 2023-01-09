<?php

use Illuminate\Http\Request;
use App\Http\Livewire\DaftarSoal;
use App\Http\Livewire\DaftarJadwal;
use App\Http\Livewire\DaftarPeserta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\HalamanTesPeserta;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\EksportDataPeserta;
use App\Http\Controllers\SubmitTestController;
use App\Http\Livewire\HalamanHasilTes;
use App\Models\JawabanPeserta;
use App\Models\SoalTes;
use App\Repositories\SoalTes\SoalTesRepository;
use Mockery\Generator\StringManipulation\Pass\Pass;

use function PHPSTORM_META\map;

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
    Route::get('/admin/hasil-tes', HalamanHasilTes::class)->name('hasil-tes');

    Route::post('/tambah-jadwal', DaftarJadwal::class)->name('tambah-jadwal');
    Route::get('eksport-data-peserta', [EksportDataPeserta::class, 'export'])->name('eksport.data.peserta');
});

// Route User Page (Peserta)
Route::middleware('is_user')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/halaman-tes-peserta', HalamanTesPeserta::class)->middleware('test_running')->name('halaman.tes.peserta');
    // Route::post('/halaman-tes-peserta', HalamanTesPeserta::class, 'handleNavigation')->name('handle.navigation');
    Route::get('test', function () {
        $allJawaban = JawabanPeserta::with(['soalTes', 'hasilTes.user'])->where('id_hasil_tes', auth()->user()->hasilTes->id)->get();
        $hasil = 0;
        foreach ($allJawaban as $jawaban) {
            if ($jawaban->soalTes->jawaban == $jawaban->jawaban) {
                $bobot = $jawaban->soalTes->bobot;
                $hasil = $hasil + $bobot;
            }
        }
        $jumlahSoal = SoalTes::all()->count();

        // dd($allJawaban[2]->soalTes);
        dd($jumlahSoal);
    });
});

Auth::routes();
