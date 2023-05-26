<div class="row no-margin no-padding">
    @include('partials.modal-konfirmasi-selesai-tes-kategori3')
    {{-- @include('partials.modal-flyout-nav3') --}}

        <div class="col-md-12 full-height p-5">
            <form id="formJawaban">
                <div class="row justify-content-between">
                    <div class="col-md-4 no-padding" style="width: 38%">
                        {{-- {!! $daftarSoal->links() !!} --}}
                    </div>
                    <div class="com-md-4 px-3 py-0 text-primary border">
                        <h5 id="timer"></h5>
                    </div>
                    <div class="col-md-4 no-padding" style="width: 28%">
                        <button class="btn text-primary btn-lg pull-right" type="button" data-toggle="modal"
                            data-target="#modalKonfirmasiSelesaiTesKategori3">Selesaikan</button>
                    </div>
                </div>
                <div class="row justify-content-between mt-5">
                    <div class="col-md-8 m-auto" id="item-lists">
                        @include('partials.data_soal')
                    </div>
                </div>
            </form>
        </div>
        <script defer>
            
            // function getData(page){
            //     $.ajax({
            //         url: '?page=' + page,
            //         type: "get",
            //         datatype: "html",
            //     }).done(function(data){
            //     $("#item-lists").empty().html(data);
            //         location.hash = page;
            //     }).fail(function(jqXHR, ajaxOptions, thrownError){
            //         alert('No response from server');
            //     });
            // }
            window.addEventListener('ajax_handler', event => {
                console.log('work');
                $.ajax({
                    url: "?page=2", // URL endpoint untuk mengambil data
                    type: "GET", // Tipe request yang akan digunakan untuk mengambil data
                    dataType: "html", // Tipe data yang diharapkan dari respons server
                    success: function(data) {
                        // Fungsi yang akan dijalankan jika request berhasil
                        console.log(data); // Tampilkan data yang diambil pada konsol
                        // Lakukan proses selanjutnya dengan data yang telah diambil
                        $("#item-lists").replaceWith(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Fungsi yang akan dijalankan jika request gagal
                        console.log("Request Error: " + textStatus); // Tampilkan pesan error pada konsol
                        console.log(errorThrown); // Tampilkan informasi error pada konsol
                    }
                });
            })
            // window.addEventListener('ajax_test', event => {
            //     console.log('ajax_test worked');
            // })
        </script>
    </div>