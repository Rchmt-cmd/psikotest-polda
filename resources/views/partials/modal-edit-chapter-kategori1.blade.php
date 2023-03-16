<!-- Modal -->
<div class="modal fade slide-up" id="modalEditChapterKategori1" tabindex="-1" role="dialog" aria-labelledby="modalEditChapterKategori1Label"
    aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content-wrapper">
            <div class="modal-content modal-lg">
                <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <p class="pg-close fs-14">x</p>
                    </button>
                    <h5>Tambah Soal Psikotes</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                          @if($dataChapterKategori1)
                          @livewire('edit-chapter-kategori1', ['dataChapterKategori1' => $dataChapterKategori1])
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