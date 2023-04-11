<!-- Modal -->
<div class="modal fade slide-up disable-scroll" id="modalEditSoalKategori1" tabindex="-1" role="dialog"
  aria-labelledby="modalEditSoalKategori1Label" aria-hidden="false" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content-wrapper">
      <div class="modal-content modal-lg">
        <div class="modal-header clearfix text-left">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <p class="pg-close fs-14">x</p>
          </button>
          <h5>Edit Soal Psikotes</h5>
        </div>
        <div class="modal-body">
          @if($dataSoalKategori1)
          @livewire('edit-soal-kategori1', ['dataSoalKategori1' => $dataSoalKategori1])
          @else
          <div class="progress-circle-indeterminate"></div>
          @endif
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- /.modal-dialog -->