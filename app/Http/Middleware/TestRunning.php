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
        $jadwal = date('d-m-Y H:i:s', strtotime(auth()->user()->jadwal->tanggal_tes . " " . auth()->user()->jadwal->waktu_mulai));
        $timelogin = date('d-m-Y H:i:s');
        if ($timelogin >= $jadwal) {
            
            return $next($request);
        }
        return redirect()->back()->withErrors(['error' => 'Anda belum boleh memasuki halaman tes']);
    }
}
