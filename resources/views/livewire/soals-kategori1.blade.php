<div class="row full-height no-margin">
    <div>
        @include('partials.modal-tambah-soal')
        @include('partials.modal-konfirmasi-chapter-kategori1')
        @include('partials.modal-edit-chapter-kategori1')
        @include('partials.modal-konfirmasi-soal-kategori1')
        @include('partials.modal-edit-soal-kategori1')
    </div>
    <div class="card card-default p-3 flex-row justify-content-between align-items-center">
        <div>
            <h3>Total Chapter Kategori 1: <span class="light no-margin">{{ $totalChapter }} Chapter</span></h3>
        </div>
        <div>
            <h3>Total Soal Kategori 1: <span class="light no-margin">{{ $totalSoal }} Soal</span></h3>
        </div>
        <div class="">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambahSoal">
                <i class="pg-icon">add</i> Tambah Soal
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
            <table id="tableChapter" class="table table-hover" cellspacing="0" width="100%"
                aria-labeledly="tableWithSearch_info">
                <thead>
                    <tr>
                        <th>Id Chapter</th>
                        <th>Deskripsi Chapter</th>
                        <th>Isi Chapter</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($daftarChapterKategori1 as $chapter)
                    <tr>
                        <td class="fs-12">{{ $chapter->id }}</td>
                        <td class="fs-12">{{ $chapter->deskripsi_subkategori }}</td>
                        <td class="fs-12">
                            {{ $chapter->isi_subkategori }} <br>
                            @if($chapter->gambar_subkategori)
                                <img src="{{ asset('storage/'.$chapter->gambar_subkategori) }}" alt="gambar_chapter" srcset="" width="80">
                            @endif
                        </td>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    role="button" aria-expanded="false">
                                    <i class="card-icon card-icon-settings "></i>
                                </a>
    
                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                                    <li><a href="#" data-toggle="modal" data-target="#modalEditChapterKategori1"
                                            wire:click='handleEditChapterKategori1({{ $chapter->id }})'><span
                                                class="material-icons fs-16">edit</span> Edit</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#modalKonfirmasiChapterKategori1"
                                            wire:click='handleHapusChapterKategori1({{ $chapter->id }})'><span
                                                class="material-icons fs-16">delete</span> Hapus</a>
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
            {!! $daftarChapterKategori1->links() !!}
        </div>
    </div>
    <div class="card card-default p-1 mx-3 mt-3">
        <div class="card-header">
            <div class="card-title">
                <b>Daftar Soal</b>
            </div>
            <div class="pull-right">
                <div class="col-xs-12">
                    <input type="text" id="search-table-soal" class="form-control pull-right" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="tableSoal" class="table table-hover" cellspacing="0" width="100%"
                aria-labeledly="tableWithSearch_info">
                <thead>
                    <tr>
                        <th>No. Soal</th>
                        <th>Chapter Soal</th>
                        <th>Isi Soal</th>
                        <th>Pil A</th>
                        <th>Pil B</th>
                        <th>Pil C</th>
                        <th>Pil D</th>
                        <th>Pil E</th>
                        <th>Jawaban</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($daftarSoalTes as $soalTes)
                    <tr>
                        <td class="fs-12">{{ $soalTes->nomor_soal }}</td>
                        <td class="fs-12">
                            {{ $soalTes->subKategoriSoal == null ? '-' : $soalTes->subKategoriSoal->deskripsi_subkategori }}
                        </td>
                        <td class="fs-12">{{ $soalTes->isi_soal }}{{ $soalTes->gambar_soal }}</td>
                        <td class="fs-12">{{ $soalTes->pil_a }}
                            @if($soalTes->gambar_pil_a)
                            <img src="{{ asset('storage/'.$soalTes->gambar_pil_a) }}" alt="gambar_pil_a" srcset=""
                                width="80">
                            @endif
                        </td>
                        <td class="fs-12">{{ $soalTes->pil_b }}
                            @if($soalTes->gambar_pil_b)
                            <img src="{{ asset('storage/'.$soalTes->gambar_pil_b) }}" alt="gambar_pil_b" srcset=""
                                width="80">
                            @endif
                        </td>
                        <td class="fs-12">{{ $soalTes->pil_c }}
                            @if($soalTes->gambar_pil_c)
                            <img src="{{ asset('storage/'.$soalTes->gambar_pil_c) }}" alt="gambar_pil_c" srcset=""
                                width="80">
                            @endif
                        </td>
                        <td class="fs-12">{{ $soalTes->pil_d }}
                            @if($soalTes->gambar_pil_d)
                            <img src="{{ asset('storage/'.$soalTes->gambar_pil_d) }}" alt="gambar_pil_d" srcset=""
                                width="80">
                            @endif
                        </td>
                        <td class="fs-12">{{ $soalTes->pil_e }}
                            @if($soalTes->gambar_pil_e)
                            <img src="{{ asset('storage/'.$soalTes->gambar_pil_e) }}" alt="gambar_pil_e" srcset=""
                                width="80">
                            @endif
                        </td>
                        <td class="fs-12">{{ $soalTes->jawaban }}</td>
                        <td>
                            <div class="dropdown">
                                <a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    role="button" aria-expanded="false">
                                    <i class="card-icon card-icon-settings "></i>
                                </a>
    
                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                                    <li><a href="#" data-toggle="modal" data-target="#modalEditSoalKategori1"
                                            wire:click='handleEditSoal({{ $soalTes->id }})'><span
                                                class="material-icons fs-16">edit</span> Edit</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#modalKonfirmasiSoalKategori1"
                                            wire:click='handleHapusSoal({{ $soalTes->id }})'><span
                                                class="material-icons fs-16">delete</span> Hapus</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center">Tidak ada data soal</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {!! $daftarSoalTes->links() !!}
        </div>
    </div>
</div>