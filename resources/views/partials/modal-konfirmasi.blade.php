<div class="fixed modal fade stick-up" id="modalKonfirmasi" tabindex="-1" role="dialog"
    aria-labelledby="modalKonfirmasi" aria-hidden="false" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix align-items-center">
                    <button type="button" data-dismiss="modal" class="close">
                        <i class="pg-icon">close</i>
                    </button>
                    <h5>Ingin menghapus data peserta ?</h5>
                </div>
                @if($idPeserta)
                <form role="form" wire:submit.prevent='delete({{ $idPeserta->id }})'>
                    <div class="modal-body d-flex justify-content-center">
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-block m-t-5">
                                Batal
                            </button>
                        </div>
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="submit" class="btn btn-danger btn-block m-t-5" >
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