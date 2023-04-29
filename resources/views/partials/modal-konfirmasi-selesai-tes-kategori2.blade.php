<!-- Modal -->
<div class="modal fade slide-up disable-scroll" id="modalKonfirmasiSelesaiTesKategori2" tabindex="-1" role="dialog"
  aria-labelledby="modalKonfirmasiSelesaiTesKategori2" aria-hidden="false">
  <div class="modal-dialog ">
    <div class="modal-content-wrapper">
      <div class="modal-content modal-md">
        <div class="modal-header clearfix text-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <p class="pg-close fs-14">x</p>
          </button>
          <h5>Apakah anda yakin akan menyelesaikan tes ini? Jika belum, cek kembali jawaban anda</h5>
        </div>
        <div class="modal-body">
          <form action="" wire:submit="storeHasilTest()">
            <div class="modal-body d-flex justify-content-center">
              <input type="hidden" name="id_user" value="">
              <div class="col-md-4 m-t-10 sm-m-t-10">
                <button type="submit" class="btn btn-primary btn-block m-t-5">
                  Akhiri
                </button>
              </div>
              <div class="col-md-4 m-t-10 sm-m-t-10">
                <button type="button" data-dismiss="modal" class="btn btn-default btn-block m-t-5">
                  Batal
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- /.modal-dialog -->