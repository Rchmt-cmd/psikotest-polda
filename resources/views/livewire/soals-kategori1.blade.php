<div class="card card-default p-1">
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
                                <li><a href="#" data-toggle="modal" data-target="#modalEditSoal"
                                        wire:click='handleEditSoal({{ $soalTes->id }})'><span
                                            class="material-icons fs-16">edit</span> Edit</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modalKonfirmasiSoal"
                                        wire:click='handleHapusSoal({{ $soalTes->id }})'><span
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
    </div>
</div>