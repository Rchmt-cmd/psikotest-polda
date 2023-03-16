<div class="card card-default p-1">
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
                @forelse ($daftarChapterKategori1 as $chapter)
                <tr>
                    <td class="fs-12">{{ $chapter->id }}</td>
                    <td class="fs-12">{{ $chapter->deskripsi_subkategori }}</td>
                    <td class="fs-12">{{ $chapter->isi_subkategori }}</td>
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
                                <li><a href="#" data-toggle="modal" data-target="#modalKonfirmasiSoal"
                                        wire:click='handleHapusSoal({{ $chapter->id }})'><span
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