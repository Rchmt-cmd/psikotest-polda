<div wire:ignore.self class="modal fade slide-up disable-scroll" id="modalKonfirmasiResetHasilTes" tabindex="-1"
  role="dialog" aria-labelledby="modalKonfirmasiResetHasilTes" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content-wrapper">
      <div class="modal-content">
        <div class="modal-header clearfix align-items-center">
          <button type="button" data-dismiss="modal" class="close">
            <i class="pg-icon">close</i>
          </button>
          <h5>Reset data hasil tes akan menghapus seluruh data hasil tes di database. Ingin tetap melanjutkan?</h5>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <div class="col-md-4 m-t-10 sm-m-t-10">
            <button type="button" data-dismiss="modal" class="btn btn-default btn-block m-t-5">
              Batal
            </button>
          </div>
          <div class="col-md-4 m-t-10 sm-m-t-10">
            <button type="button" wire:click="resetHasilTes()" class="btn btn-danger btn-block m-t-5">
              Hapus
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>