<!-- Modal -->
<div class="modal fade slide-up" id="modalEditChapterKategori3" tabindex="-1" role="dialog"
  aria-labelledby="modalEditChapterKategori3Label" aria-hidden="false" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content-wrapper">
      <div class="modal-content modal-lg">
        <div class="modal-header clearfix text-left">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <p class="pg-close fs-14">x</p>
          </button>
          <h5>Edit Chapter Soal</h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              @if($dataChapterKategori3)
              @livewire('edit-chapter-kategori3', ['dataChapterKategori3' => $dataChapterKategori3])
              @else
              <div class="progress-circle-indeterminate"></div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- /.modal-dialog -->