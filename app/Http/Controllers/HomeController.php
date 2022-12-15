<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $jumlahPeserta;
    public $dataSingkatPeserta;
    protected $userRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function adminHome()
    {
        $this->jumlahPeserta = $this->userRepository->getAll()->count();
        $this->dataSingkatPeserta = $this->userRepository->getAll()->take(5);
        return view('pages.admin-home')
            ->with('jumlah_peserta', $this->jumlahPeserta)
            ->with('dataSingkatPeserta', $this->dataSingkatPeserta);
    }
}
