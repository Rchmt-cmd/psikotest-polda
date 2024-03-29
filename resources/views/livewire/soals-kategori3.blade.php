<div class="row full-height no-margin">
    <div>
        @include('partials.modal-tambah-soal-kategori3')
        @include('partials.modal-edit-soal-kategori3')
        @include('partials.modal-edit-chapter-kategori3')
        @include('partials.modal-konfirmasi-soal-kategori3')
        @include('partials.modal-konfirmasi-chapter-kategori3')
        @include('partials.modal-konfirmasi-reset-soal-3')
    </div>
    <div class="card card-default p-3 flex-row justify-content-between align-items-center">
        <div>
            <h3>Total Chapter Kategori 3: <span class="light no-margin">{{ $totalChapter }} Chapter</span></h3>
        </div>
        <div>
            <h3>Total Soal Kategori 3: <span class="light no-margin">{{ $totalSoal }} Soal</span></h3>
        </div>
        <div class="">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambahSoalKategori3">
                <i class="pg-icon">add</i> Tambah Soal
            </button>
            <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalKonfirmasiResetSoal3">
                <i class="pg-icon">danger</i> Reset Soal
            </button>
        </div>
    </div>
    <div class="card card-default p-1 mx-3 mt-3">
        <div class="card-header">
            <div class="card-title">
                <b>Daftar Chapter</b>
            </div>
            <div class="pull-right">
                <div class="col-xs-12">
                    <input type="text" id="search-table-chapter" class="form-control pull-right" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="tableChapterKategori3" class="table table-hover" cellspacing="0" width="100%"
                aria-labeledly="tableWithSearch_info">
                <thead>
                    <tr>
                        <th>Deskripsi Chapter</th>
                        <th>Isi Chapter</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($daftarChapterKategori3 as $chapter)
                    <tr>
                        <td class="fs-12">{{ $chapter->deskripsi_subkategori }}</td>
                        <td class="fs-12">{{ $chapter->isi_subkategori }}</td>
                        <td>
                            <div class="dropdown">
                                <a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    role="button" aria-expanded="false">
                                    <i class="card-icon card-icon-settings "></i>
                                </a>
    
                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                                    <li><a href="#" data-toggle="modal" data-target="#modalEditChapterKategori3"
                                            wire:click='handleEditChapterKategori3({{ $chapter->id }})'><span
                                                class="material-icons fs-16">edit</span> Edit</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#modalKonfirmasiChapterKategori3"
                                            wire:click='handleHapusChapterKategori3({{ $chapter->id }})'><span
                                                class="material-icons fs-16">delete</span> Hapus</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data chapter</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {!! $daftarChapterKategori3->links() !!}
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
        <div class="table-responsive p-3">
            <table id="tableSoalKategori3" class="table table-bordered table-hover" cellspacing="0" width="100%"
                aria-labeledly="tableWithSearch_info">
                <thead>
                    <th>No.</th>
                    <th>Chapter Soal</th>
                    <th colspan="4"><center>Soal</center></th>
                    <th>Jawaban</th>
                    <th></th>
                </thead>
                <tbody>
                    @forelse ($daftarSoalKategori3 as $soalKategori3)
                    @php
                        $soal = str_split($soalKategori3->isi_soal);
                    @endphp
                    <tr>
                        <td class="fs-12">{{ $soalKategori3->nomor_soal }}</td>
                        <td class="fs-12">{{ $soalKategori3->subKategoriSoal == null ? '-' : $soalKategori3->subKategoriSoal->deskripsi_subkategori }}</td>
                        <td class="fs-12">{{ $soal[0] }}</td>
                        <td class="fs-12">{{ $soal[1] }}</td>
                        <td class="fs-12">{{ $soal[2] }}</td>
                        <td class="fs-12">{{ $soal[3] }}</td>
                        <td class="fs-12">{{ $soalKategori3->jawaban }}</td>
                        <td>
                            <div class="dropdown">
                                <a id="card-settings" data-target="#" href="#" data-toggle="dropdown"
                                    aria-haspopup="true" role="button" aria-expanded="false">
                                    <i class="card-icon card-icon-settings "></i>
                                </a>

                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                                    <li><a href="#" data-toggle="modal" data-target="#modalEditSoalKategori3"
                                            wire:click='handleEditSoalKategori3({{ $soalKategori3->id }})'><span
                                                class="material-icons fs-16">edit</span> Edit</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#modalKonfirmasiSoalKategori3"
                                            wire:click='handleHapusSoalKategori3({{ $soalKategori3->id }})'><span
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
            {!! $daftarSoalKategori3->links() !!}
        </div>
    </div>
</div>