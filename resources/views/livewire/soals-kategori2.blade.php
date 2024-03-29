<div class="row full-height no-margin">
    <div>
        @include('partials.modal-tambah-soal-kategori2')
        @include('partials.modal-edit-soal-kategori2')
        @include('partials.modal-konfirmasi-soal-kategori2')
        @include('partials.modal-konfirmasi-reset-soal-2')
    </div>
    <div class="card card-default p-3 flex-row justify-content-between align-items-center">
        <div>
            <h3>Total Soal Kategori 2: <span class="light no-margin">{{ $totalSoalKategori2 }} Soal</span></h3>
        </div>
        <div class="">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambahSoalKategori2">
                <i class="pg-icon">add</i> Tambah Soal
            </button>
            <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalKonfirmasiResetSoal2">
                <i class="pg-icon">danger</i> Reset Soal
            </button>
        </div>
    </div>
    <div class="card card-default p-1 mx-3 mt-3">
        <div class="card-header">
            <div class="card-title">
                <b>Daftar Soal</b>
            </div>
            <div class="pull-right">
                <div class="col-xs-12">
                    <input type="text" id="search-table-soal-kategori2" class="form-control pull-right"
                        placeholder="Search">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="tableSoalKategori2" class="table table-hover" cellspacing="0" width="100%"
                aria-labeledly="tableWithSearch_info">
                <thead>
                    <th>No.</th>
                    <th>Isi Soal</th>
                    <th>Pil A</th>
                    <th>Pil B</th>
                    <th>Pil C</th>
                    <th>Pil D</th>
                    <th>Jawaban</th>
                    <th></th>
                </thead>
                <tbody>
                    @forelse ($daftarSoalKategori2 as $soalKategori2)
                    <tr>
                        <td class="fs-12">{{ $soalKategori2->nomor_soal }}</td>
                        <td class="fs-12">
                            {{ $soalKategori2->isi_soal }} <br>
                            @if($soalKategori2->gambar_soal)
                            <img class="img_soal" src="{{ asset('storage/'.$soalKategori2->gambar_soal) }}" alt="gambar_pil_a" srcset="">
                            @endif
                        </td>
                        <td class="fs-12">{{ $soalKategori2->pil_a }}</td>
                        <td class="fs-12">{{ $soalKategori2->pil_b }}</td>
                        <td class="fs-12">{{ $soalKategori2->pil_c }}</td>
                        <td class="fs-12">{{ $soalKategori2->pil_d }}</td>
                        <td class="fs-12">{{ $soalKategori2->jawaban }}</td>
                        <td>
                            <div class="dropdown">
                                <a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    role="button" aria-expanded="false">
                                    <i class="card-icon card-icon-settings "></i>
                                </a>
    
                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                                    <li><a href="#" data-toggle="modal" data-target="#modalEditSoalKategori2"
                                            wire:click='handleEditSoalKategori2({{ $soalKategori2->id }})'><span
                                                class="material-icons fs-16">edit</span> Edit</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#modalKonfirmasiSoalKategori2"
                                            wire:click='handleHapusSoalKategori2({{ $soalKategori2->id }})'><span
                                                class="material-icons fs-16">delete</span>
                                            Hapus</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data soal</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {!! $daftarSoalKategori2->links() !!}
        </div>
    </div>
</div>