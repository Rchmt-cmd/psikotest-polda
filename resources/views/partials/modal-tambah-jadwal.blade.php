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
                            <label for="tanggal">Tanggal Tes</label>
                            <input type="date" id="tanggal" class="form-control" wire:model='tanggalTes'>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div id="waktu_mulai" class="form-group form-group-default time">
                                    <label for="waktu">Waktu MulaiTes</label>
                                    <input type="time" id="waktu" class="form-control" wire:model='waktuMulai'>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h5 class="text-center">-----></h5>
                            </div>
                            <div class="col-sm-5">
                                <div id="waktu_selesai" class="form-group form-group-default time">
                                    <label for="waktu">Waktu Selesai Tes</label>
                                    <input type="time" id="waktu" class="form-control" wire:model='waktuSelesai'>
                                </div>
                            </div>
                        </div>
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