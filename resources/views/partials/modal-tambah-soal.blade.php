<!-- Modal -->
<div class="modal fade slide-up" id="modalTambahSoal" tabindex="-1" role="dialog" aria-labelledby="modalTambahSoalLabel"
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
                            <div class="panel">
                                <ul class="nav nav-tabs nav-tabs-simple">
                                    <li class="active">
                                        <a data-toggle="tab" href="#inputSoal">Input Soal</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#inputChapter">Input Chapter</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane slide-left active" id="inputSoal">
                                        @livewire('tambah-soal')
                                    </div>
                                    <div class="tab-pane slide-left" id="inputChapter">
                                        @livewire('tambah-chapter-kategori1')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- /.modal-dialog -->