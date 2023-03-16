<div class="row full-height no-margin">
    <div>
        @include('partials.modal-tambah-soal')
        @include('partials.modal-konfirmasi-soal')
        @include('partials.modal-edit-soal')
        @include('partials.modal-edit-chapter-kategori1')
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="col-md-12 no-padding full-height overflow-auto">
        <div class="full-height p-2">
            <div class="panel">
                <ul class="nav nav-tabs nav-tabs-simple">
                    <li class="active">
                        <a data-toggle="tab" href="#kategori1">Kategori 1</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#kategori2">Kategori 2</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#kategori3">Kategori 3</a>
                    </li>
                </ul>
                <div class="tab-content">
                    {{-- soal kategori 1 --}}
                    <div class="tab-pane slide-left active" id="kategori1">
                        <div class="card card-default p-3 flex-row justify-content-between align-items-center">
                            <div>
                                <h3>Total Chapter Kategori 1: <span class="light no-margin">{{
                                        $daftarChapter->count() }} Chapter</span></h3>
                            </div>
                            <div>
                                <h3>Total Soal Kategori 1: <span class="light no-margin">{{
                                        $daftarSoalTes->count() }} Soal</span></h3>
                            </div>
                            <div class="">
                                <button class="btn btn-primary btn-lg" data-toggle="modal"
                                    data-target="#modalTambahSoal">
                                    <i class="pg-icon">add</i> Tambah Soal
                                </button>
                            </div>
                        </div>
                        @livewire('chapters-kategori1')
                        {{-- @livewire('soals-kategori1') --}}
                    </div>
                    <div class="tab-pane slide-left" id="kategori2">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                    “ Nothing is <span class="semi-bold">impossible</span>, the word
                                    itself says 'I'm <span class="semi-bold">possible</span>'! ”
                                </h3>
                                <p>
                                    A style represents visual customizations on top of a layout. By
                                    editing a style, you can use Squarespace's visual interface to
                                    customize your...
                                </p><br>
                                <p class="pull-right">
                                    <button class="btn btn-white btn-cons" type="button">White</button>
                                    <button class="btn btn-success btn-cons" type="button">Success</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane slide-left" id="kategori3">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                    Follow us &amp; get updated!
                                </h3>
                                <p>
                                    Instantly connect to what's most important to you. Follow your
                                    friends, experts, favorite celebrities, and breaking news.
                                </p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>