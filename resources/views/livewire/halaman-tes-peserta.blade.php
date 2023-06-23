<div class="full-height soal-wrapper">
    @if ($user_progress == 1)
    <div class="card m-0">
        <div class="row card-header justify-content-center">
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-warning">
                    fiber_manual_record
                </span>
                <p class="fs-12 light">Tes Kecerdasan</p>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons hint-text">
                    trending_flat
                </span>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-danger">
                    radio_button_unchecked
                </span>
                <p class="fs-12 light">Tes Kepribadian</p>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons hint-text">
                    trending_flat
                </span>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-danger">
                    radio_button_unchecked
                </span>
                <p class="fs-12 light">Tes Sikap Kerja</p>
            </div>
        </div>
    </div>
    @livewire('halaman-tes-kategori1')
    @elseif ($user_progress ==2)
    <div class="card m-0">
        <div class="row card-header justify-content-center">
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-success">
                    check_circle
                </span>
                <p class="fs-12 light">Tes Kecerdasan</p>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons hint-text">
                    trending_flat
                </span>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-warning">
                    fiber_manual_record
                </span>
                <p class="fs-12 light">Tes Kepribadian</p>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons hint-text">
                    trending_flat
                </span>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-danger">
                    radio_button_unchecked
                </span>
                <p class="fs-12 light">Tes Sikap Kerja</p>
            </div>
        </div>
    </div>
    @livewire('halaman-tes-kategori2')
    @else
    <div class="card m-0">
        <div class="row card-header justify-content-center">
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-success">
                    check_circle
                </span>
                <p class="fs-12 light">Tes Kecerdasan</p>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons hint-text">
                    trending_flat
                </span>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-success">
                    check_circle
                </span>
                <p class="fs-12 light">Tes Kepribadian</p>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons hint-text">
                    trending_flat
                </span>
            </div>
            <div class="col-md-0 text-center">
                <span class="material-icons fs-15 semi-bold text-warning">
                    fiber_manual_record
                </span>
                <p class="fs-12 light">Tes Sikap Kerja</p>
            </div>
        </div>
    </div>
    @livewire('halaman-tes-kategori3')
    @endif
</div>