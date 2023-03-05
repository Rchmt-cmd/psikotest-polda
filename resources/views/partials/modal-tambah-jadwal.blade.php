<!-- Modal -->
<div class="modal fade slide-up disable-scroll" id="modalTambahJadwal" tabindex="-1" role="dialog"
    aria-labelledby="modalTambahJadwalLabel" aria-hidden="false" wire:ignore.self>
    <div class="modal-dialog ">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <p class="pg-close fs-14">x</p>
                    </button>
                    <h5>Tambah Jadwal Tes</h5>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='store'>
                        <div id="tanggal_tes" class="form-group form-group-default date">
                            <label for="tanggal" class="fs-11">Tanggal Tes</label>
                            <input required type="date" id="tanggal" class="form-control" wire:model='tanggalTes'>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div id="waktu_mulai_akses" class="form-group form-group-default time">
                                    <label for="waktu_mulai" class="fs-11">Waktu Mulai Akses Tes</label>
                                    <input required type="time" id="waktu_mulai" class="form-control"
                                        wire:model='waktuMulaiAkses'>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="text-center">--></h5>
                            </div>
                            <div class="col-sm-5">
                                <div id="waktu_selesai_akses" class="form-group form-group-default time">
                                    <label for="waktu_selesai" class="fs-11">Waktu Selesai Akses Tes</label>
                                    <input required type="time" id="waktu_selesai" class="form-control"
                                        wire:model='waktuSelesaiAkses'>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <label for="durasi" class="fs-11">Durasi Mengerjakan Tes</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div id="durasi_tes" class="form-group form-group-default time">
                                    <input class="in_put" id="durasi" type="number" min="0" max="23" placeholder="jam" wire:model='jam'>
                                    @error('jam') <span class="error text-danger fs-10">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="durasi_tes" class="form-group form-group-default time">
                                    <input class="in_put" id="" type="number" min="0" max="59" placeholder="menit" wire:model='menit'>
                                    @error('menit') <span class="error text-danger fs-10">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="durasi_tes" class="form-group form-group-default time">
                                    <input class="in_put" id="" type="number" min="0" max="59" placeholder="detik" wire:model='detik'>
                                    @error('detik') <span class="error text-danger fs-10">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div> --}}
                        <div class="align-center">
                            <button class="btn btn-primary pull-right" type="submit">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- /.modal-dialog -->