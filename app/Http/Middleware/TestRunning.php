<?php

namespace App\Http\Middleware;

use App\Models\HasilTes;
use Attribute;
use Closure;
use Illuminate\Http\Request;

class TestRunning
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!is_null(auth()->user()->jadwal)) {
            $jadwalMulai = date('d-m-Y H:i:s', strtotime(auth()->user()->jadwal->tanggal_tes . " " . auth()->user()->jadwal->waktu_mulai_akses));
            $jadwalSelesai = date('d-m-Y H:i:s', strtotime(auth()->user()->jadwal->tanggal_tes . " " . auth()->user()->jadwal->waktu_selesai_akses));
            $timelogin = date('d-m-Y H:i:s');
            if ($timelogin >= $jadwalMulai && $timelogin <= $jadwalSelesai && auth()->user()->status_tes == 0) {
                // buat data tabel hasil test
                $data = HasilTes::where('id_user', auth()->user()->id)->first();
                if (is_null($data)) {
                    $attributes = [];
                    $attributes['id_user'] = auth()->user()->id;
                    $attributes['nama'] = auth()->user()->name;
                    $attributes['nomor_tes'] = auth()->user()->nomor_tes;
                    $attributes['tanggal_tes'] = auth()->user()->jadwal->tanggal_tes;
                    $attributes['waktu_mulai_akses'] = auth()->user()->jadwal->waktu_mulai_akses;
                    $attributes['start'] = date('Y-m-d H:i:s');
                    HasilTes::create($attributes);
                }
                return $next($request);
            }
            return redirect('home')->withErrors(['error' => 'Anda tidak memiliki akses masuk halaman tes']);
        }
        return redirect('home')->withErrors(['error' => 'Anda belum memiliki jadwal tes! Mohon hubungi administrator']);
    }
}
