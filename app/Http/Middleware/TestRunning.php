<?php

namespace App\Http\Middleware;

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
            $jadwalMulai = date('d-m-Y H:i:s', strtotime(auth()->user()->jadwal->tanggal_tes . " " . auth()->user()->jadwal->waktu_mulai));
            $jadwalSelesai = date('d-m-Y H:i:s', strtotime(auth()->user()->jadwal->tanggal_tes . " " . auth()->user()->jadwal->waktu_selesai));
            $timelogin = date('d-m-Y H:i:s');
            if ($timelogin >= $jadwalMulai && $timelogin <= $jadwalSelesai && auth()->user()->status_tes == 0) {
                // buat data tabel hasil test
                
                return $next($request);
            }
            return redirect()->back()->withErrors(['error' => 'Anda belum boleh memasuki halaman tes']);
        }
        return redirect()->back()->withErrors(['error' => 'Anda belum memiliki jadwal tes']);
    }
}
