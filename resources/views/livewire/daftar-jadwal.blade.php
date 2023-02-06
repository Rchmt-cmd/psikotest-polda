<div>
    <div>
        @include('partials.modal-tambah-jadwal')
        @include('partials.modal-edit-jadwal')
        @include('partials.modal-konfirmasi-jadwal')
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="full-height">
        @forelse ($daftarJadwals as $daftarJadwal)
            <div id="myCard" class="card">
                <div class="card-header separator">
                    <div class="card-title">Sesi Aktif {{ $daftarJadwal->id }}</div>
                    {{-- @if ($daftarJadwal->waktu_mulai_akses)
                        
                    @endif --}}
                    <div class="card-controls">
                        <ul>
                            <li>
                                <div class="dropdown">
                                    <a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                                        role="button" aria-expanded="false">
                                        <i class="card-icon card-icon-settings "></i>
                                    </a>
            
                                    <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                                        <li><a href="#" data-toggle="modal" data-target="#modalEditJadwal" wire:click="handleEditJadwal({{ $daftarJadwal->id }})">Edit</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#" class="card-close" data-toggle="modal" data-target="#modalKonfirmasiJadwal" wire:click="handleDeleteJadwal({{ $daftarJadwal->id }})" ><i class="card-icon card-icon-close"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="semi-bold fs-13 m-0">Tanggal</p>
                                <p class="light fs-13 m-0">{{ date('d F Y' ,strtotime($daftarJadwal->tanggal_tes)) }}</p>
                            </div>
                            <div class="col-lg-6">
                                <p class="semi-bold fs-13 m-0">Waktu</p>
                                <p class="light fs-13 m-0">{{ date('H:i', strtotime($daftarJadwal->waktu_mulai_akses)) }} - {{ date('H:i', strtotime($daftarJadwal->waktu_selesai_akses)) }} WITA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center">
                <h5 class="hint-text">Belum ada jadwal</h5>
            </div>
        @endforelse
    </div>
</div>