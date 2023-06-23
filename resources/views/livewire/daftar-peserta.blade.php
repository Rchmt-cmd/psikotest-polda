<div class="row full-height no-margin p-4">
    <div>
        @include('partials.modal-tambah-peserta')
        @include('partials.modal-lihat-peserta')
        @include('partials.modal-konfirmasi-peserta')
        @include('partials.modal-edit-peserta')
        @include('partials.modal-konfirmasi-reset-peserta')
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="col-md-12 no-padding full-height overflow-auto">
        <!-- START WIDGET widget_tableWidget-->
        <div class="widget-11 card   no-margin widget-loader-bar">
            <div class="card-header">
                <div class="card-title">Daftar Peserta Tes
                </div>
            </div>
            <div class="p-l-20 p-r-20 p-b-10 p-t-5">
                <div class="pull-left">
                    <h3 class="text-primary no-margin">Total Peserta</h3>
                    <h4 class="text-primary no-margin">{{ count($users) }} Orang</h4>
                </div>
                <div class="pull-right">
                    <div class="col-xs-12">
                        <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalKonfirmasiResetPeserta">
                            <i class="pg-icon">danger</i> Reset Peserta
                        </button>
                        <button class="btn btn-primary btn-lg" wire:click="handleEksportData">
                            <span class="material-icons fs-16">
                                print
                            </span> Eksport Data
                        </button>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambahPeserta">
                            <i class="pg-icon">add</i> Tambah Peserta
                        </button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-11-table auto-overflow">
                <table class="table table-striped" id="tablePeserta">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor HP</th>
                            <th>No. Tes</th>
                            <th>Status Tes</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="odd gradeX">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td class="center">{{$user->nomor_tes}}</td>
                            <td class="center">
                                @if($user->status_tes == 0)
                                <span class="text-danger">Belum</span>
                                @else
                                <span class="text-success">Selesai</span>
                                @endif
                            </td>
                            <td class="center">
                                <button aria-label="" type="button"
                                    class="btn btn-sm btn-rounded btn-animated from-left" data-toggle="modal"
                                    data-target="#modalLihatPeserta" wire:click="handleLihatPeserta({{ $user->id }})">
                                    <span>Lihat</span>
                                    <span class="hidden-block">
                                        <span class="material-icons">
                                            outbound
                                        </span>
                                    </span>
                                </button>

                                <button aria-label="" type="button"
                                    class="btn btn-sm btn-rounded btn-primary btn-animated from-left"
                                    data-toggle="modal" data-target="#modalEditPeserta"
                                    wire:click="handleEditPeserta({{ $user->id }})">
                                    <span>Edit</span>
                                    <span class="hidden-block">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </span>
                                </button>

                                <button aria-label="" type="button"
                                    class="btn btn-sm btn-rounded btn-danger btn-animated from-left" data-toggle="modal"
                                    data-target="#modalKonfirmasiPeserta"
                                    wire:click="handleHapusPeserta({{ $user->id }})">
                                    <span>Hapus</span>
                                    <span class="hidden-block">
                                        <span class="material-icons">
                                            delete
                                        </span>
                                    </span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END WIDGET -->
    </div>
</div>