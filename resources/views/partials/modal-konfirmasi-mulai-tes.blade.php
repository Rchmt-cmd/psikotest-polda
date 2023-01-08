<!-- Modal -->
<div class="modal fade slide-up disable-scroll" id="modalKonfirmasiMulaiTes" tabindex="-1" role="dialog"
  aria-labelledby="modalKonfirmasiMulaiTes" aria-hidden="false">
  <div class="modal-dialog ">
    <div class="modal-content-wrapper">
      <div class="modal-content modal-md">
        <div class="modal-header clearfix text-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <p class="pg-close fs-14">x</p>
          </button>
          <h5>Mulai Tes</h5>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="modal-body d-flex justify-content-center">
              <input type="hidden" name="id_user" value="">
              <div class="col-md-4 m-t-10 sm-m-t-10">
                <a href="{{ route('halaman.tes.peserta') }}" class="btn btn-primary btn-block m-t-5" >
                  Mulai</a>
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