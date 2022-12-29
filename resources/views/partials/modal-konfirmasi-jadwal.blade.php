<div wire:ignore.self class="fixed modal fade stick-up" id="modalKonfirmasiJadwal" tabindex="-1" role="dialog"
    aria-labelledby="modalKonfirmasiJadwal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix align-items-center">
                    <button type="button" data-dismiss="modal" class="close">
                        <i class="pg-icon">close</i>
                    </button>
                    <h5>Ingin menghapus jadwal ?</h5>
                </div>
                @if($dataJadwal)
                <form role="form" wire:submit.prevent='delete({{ $dataJadwal->id }})'>
                    <div class="modal-body d-flex justify-content-center">
                        <div class="col-md-6">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-block m-t-5">
                                Batal
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-danger btn-block m-t-5">
                                Hapus
                            </button>
                        </div>
                    </div>
                </form>
                @else
                <div class="progress-circle-indeterminate"></div>
                @endif

            </div>
        </div>
    </div>
</div>