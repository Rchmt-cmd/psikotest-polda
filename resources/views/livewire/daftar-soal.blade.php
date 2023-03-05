<div class="row full-height no-margin">
    <div>
        @include('partials.modal-tambah-soal')
        @include('partials.modal-konfirmasi-soal')
        @include('partials.modal-edit-soal')
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="col-md-12 no-padding full-height overflow-auto">
        <div class="full-height p-2">
            <div class="card card-default p-1">
                <div class="card-header">
                    <div class="card-title">
                        Daftar Soal
                    </div>
                </div>
                <div class="panel">
                    <ul class="nav nav-tabs nav-tabs-simple">
                        <li class="active">
                            <a data-toggle="tab" href="#kategori1">Kategori 1</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#kategori2">Kategori 2</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#kategori3">Kategori 3</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane slide-left active" id="kategori1">
                            <div class="card-header no-padding">
                                <div class="pull-left">
                                        <h3>Total Soal Kategori 1: <span class="light no-margin">{{
                                                $daftarSoalTes->count() }} Soal</span></h3>
                                </div>
                                <div class="pull-right">
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambahSoal">
                                            <i class="pg-icon">add</i> Tambah Soal
                                        </button>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="col-xs-12">
                                    <input type="text" id="search-table" class="form-control pull-right"
                                        placeholder="Search">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="tableSoal" class="table table-hover" cellspacing="0" width="100%" aria-labeledly="tableWithSearch_info">
                                    <thead>
                                        <tr>
                                            <th>No. Soal</th>
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
                                        {{-- pengkondisian untuk menampilkan chapter
                                        @if ($soalTes)
                                            
                                        @else 
                                        @endif --}}
                                        <tr>
                                            <td colspan="8" class="text-center"><b>{{ $soalTes->deskripsi_subkategori }}</b><br>{{ $soalTes->isi_subkategori }}</td>
                                            {{-- <td class="fs-12">{{ $soalTes->nomor_soal }}</td>
                                            <td class="fs-12">{{ $soalTes->isi_soal }}{{ $soalTes->gambar_soal }}</td>
                                            <td class="fs-12">{{ $soalTes->pil_a }}
                                                @if($soalTes->gambar_pil_a)
                                                <img src="{{ asset('storage/'.$soalTes->gambar_pil_a) }}" alt="gambar_pil_a" srcset="" width="80">
                                                @endif
                                            </td>
                                            <td class="fs-12">{{ $soalTes->pil_b }}
                                                @if($soalTes->gambar_pil_b)
                                                <img src="{{ asset('storage/'.$soalTes->gambar_pil_b) }}" alt="gambar_pil_b" srcset="" width="80">
                                                @endif
                                            </td>
                                            <td class="fs-12">{{ $soalTes->pil_c }}
                                                @if($soalTes->gambar_pil_c)
                                                <img src="{{ asset('storage/'.$soalTes->gambar_pil_c) }}" alt="gambar_pil_c" srcset="" width="80">
                                                @endif
                                            </td>
                                            <td class="fs-12">{{ $soalTes->pil_d }}
                                                @if($soalTes->gambar_pil_d)
                                                <img src="{{ asset('storage/'.$soalTes->gambar_pil_d) }}" alt="gambar_pil_d" srcset="" width="80">
                                                @endif
                                            </td>
                                            <td class="fs-12">{{ $soalTes->pil_e }}
                                                @if($soalTes->gambar_pil_e)
                                                <img src="{{ asset('storage/'.$soalTes->gambar_pil_e) }}" alt="gambar_pil_e" srcset="" width="80">
                                                @endif
                                            </td>
                                            <td class="fs-12">{{ $soalTes->jawaban }}</td> --}}
                                            <td>
                                                <div class="dropdown">
                                                    <a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                                                        role="button" aria-expanded="false">
                                                        <i class="card-icon card-icon-settings "></i>
                                                    </a>
                            
                                                    <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                                                        <li><a href="#" data-toggle="modal" data-target="#modalEditSoal"
                                                                wire:click='handleEditSoal({{ $soalTes->id }})'><span
                                                                    class="material-icons fs-16">edit</span> Edit</a></li>
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
                        <div class="tab-pane slide-left" id="kategori2">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                        “ Nothing is <span class="semi-bold">impossible</span>, the word
                                        itself says 'I'm <span class="semi-bold">possible</span>'! ”
                                    </h3>
                                    <p>
                                        A style represents visual customizations on top of a layout. By
                                        editing a style, you can use Squarespace's visual interface to
                                        customize your...
                                    </p><br>
                                    <p class="pull-right">
                                        <button class="btn btn-white btn-cons" type="button">White</button>
                                        <button class="btn btn-success btn-cons" type="button">Success</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane slide-left" id="kategori3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                        Follow us &amp; get updated!
                                    </h3>
                                    <p>
                                        Instantly connect to what's most important to you. Follow your
                                        friends, experts, favorite celebrities, and breaking news.
                                    </p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>