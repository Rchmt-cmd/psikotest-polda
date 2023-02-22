<div class="modal fade slide-right" id="modalLihatPeserta" tabindex="-1" role="dialog" aria-labelledby="modalLihatPeserta"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-sm">
        <div class="modal-content-wrapper">
            <div class="modal-content table-block">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><p>X</p></button>
                <div class="modal-body v-align-center">
                    @if($idPeserta)
                        @livewire('lihat-peserta', [ 'idPeserta' => $idPeserta])
                    @else
                        <div class="progress-circle-indeterminate"></div>                    
                    @endif
                    
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>