<!-- Modal -->
<div class="modal fade slide-up disable-scroll" id="modalEditSoalKategori3" tabindex="-1" role="dialog"
  aria-labelledby="modalEditSoalKategori3Label" aria-hidden="false" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content-wrapper">
      <div class="modal-content modal-lg">
        <div class="modal-header clearfix text-left">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <p class="pg-close fs-14">x</p>
          </button>
          <h5>Edit Soal Kategori 3</h5>
        </div>
        <div class="modal-body">
          @if($dataSoalKategori3)
          @livewire('edit-soal-kategori3', ['dataSoalKategori3' => $dataSoalKategori3])
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