<div class="row full-height no-margin">
    <div>
        @include('partials.modal-tambah-soal')
    </div>
    <div class="col-md-12 no-padding full-height overflow-auto">
        <div class="full-height p-2">
            <div class="card card-default p-1">
                <div class="card-header">
                    <div class="card-title">
                        Daftar Soal
                    </div>
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambahSoal">
                                <i class="pg-icon">add</i> Tambah Soal
                            </button>
                        </div>
                    </div>
                    <div class="pull-left">
                        <div class="col-xs-12">
                            <h3 class="bold fs-16 no-margin font-montserrat">Total Soal Terinput: <span
                                    class="light fs-16 no-margin">{{ $daftarSoalTes->count() }} Soal</span></h3>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="tableSoal" class="table table-hover" cellspacing="0" width="100%"
                        aria-labeledly="tableWithSearch_info">
                        <thead>
                            <tr>
                                <th>No. Soal</th>
                                <th>Isi Soal</th>
                                <th>Pil A</th>
                                <th>Pil B</th>
                                <th>Pil C</th>
                                <th>Pil D</th>
                                <th>Jawaban</th>
                                <th>Bobot</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($daftarSoalTes as $soalTes)
                            <tr>
                                <td class="fs-12">{{ $soalTes->nomor_soal }}</td>
                                <td class="fs-12">{{ $soalTes->isi_soal }}{{ $soalTes->gambar_soal }}</td>
                                <td class="fs-12">{{ $soalTes->pil_a }} 
                                    @if($soalTes->gambar_pil_a)
                                        <img src="{{ $soalTes->gambar_pil_a }}" alt="gambar_pil_a" srcset=""> 
                                    @endif
                                </td>
                                <td class="fs-12">{{ $soalTes->pil_b }} 
                                    @if($soalTes->gambar_pil_b)
                                        <img src="{{ $soalTes->gambar_pil_b }}" alt="gambar_pil_b" srcset=""> 
                                    @endif
                                </td>
                                <td class="fs-12">{{ $soalTes->pil_c }} 
                                    @if($soalTes->gambar_pil_c)
                                        <img src="{{ $soalTes->gambar_pil_c }}" alt="gambar_pil_c" srcset=""> 
                                    @endif
                                </td>
                                <td class="fs-12">{{ $soalTes->pil_d }} 
                                    @if($soalTes->gambar_pil_d)
                                        <img src="{{ $soalTes->gambar_pil_d }}" alt="gambar_pil_d" srcset="">
                                    @endif
                                </td>
                                <td class="fs-12">{{ $soalTes->jawaban }}</td>
                                <td class="fs-12">{{ $soalTes->bobot }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a id="card-settings" data-target="#" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" role="button" aria-expanded="false">
                                            <i class="card-icon card-icon-settings "></i>
                                        </a>

                                        <ul class="dropdown-menu pull-right" role="menu"
                                            aria-labelledby="card-settings">
                                            <li><a href="#"><span class="material-icons fs-16">edit</span> Edit</a></li>
                                            <li><a href="#"><span class="material-icons fs-16">delete</span> Hapus</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data soal</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>