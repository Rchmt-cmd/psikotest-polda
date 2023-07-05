@extends('layouts.app')

@section('content')
@error('error')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{$errors->first()}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@enderror
<div class="row full-height no-margin py-3">

    <div class="col-md-4 overflow-auto data-peserta">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Selamat Datang!
                </div>
                <div class="card-controls">
                    <ul>
                        <li><a data-toggle="refresh" class="card-refresh" href="#"><i
                                    class="card-icon card-icon-refresh"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-l-20 p-r-20 p-b-10 p-t-5">
                <h3 class="text-primary mb-2 mt-0">{{ auth()->user()->name }}</h3>
                <div class="table-responsive">
                    <table class="full-width
                    @if(auth()->user()->status_tes && !is_null(auth()->user()->hasilTes))
                        table
                    @endif
                    ">
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin"><b>Status Tes</b></p>
                            </td>
                            <td>
                                @if (auth()->user()->status_tes)
                                <p class="fs-13 text-success no-margin">: Selesai</p>
                                @else
                                <p class="fs-13 text-danger no-margin">: Belum</p>
                                @endif
                            </td>
                        </tr>
                        @if(auth()->user()->status_tes && !is_null(auth()->user()->hasilTes))
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin"><b>Jumlah benar tes Kecerdasan</b></p>
                            </td>
                            <td>: {{ auth()->user()->hasilTes->jumlah_benar_kategori1 }}</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin"><b>Jumlah benar tes Kepribadian</b></p>
                            </td>
                            <td>: {{ auth()->user()->hasilTes->jumlah_benar_kategori2 }}</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin"><b>Jumlah benar tes Sikap Kerja</b></p>
                            </td>
                            <td>: {{ auth()->user()->hasilTes->jumlah_benar_kategori3 }}</td>
                        </tr>
                        @endif
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin"><b>Jadwal Tes</b></p>
                            </td>
                            <td>
                                <p class="fs-13 text-black no-margin">: @if (is_null(auth()->user()->jadwal))
                                    Anda belum mempunyai jadwal
                                    @else
                                    {{ date('d F Y',
                                    strtotime(auth()->user()->jadwal->tanggal_tes)) }} ({{ date('H:i',
                                    strtotime(auth()->user()->jadwal->waktu_mulai_akses)) }}-{{ date('H:i',
                                    strtotime(auth()->user()->jadwal->waktu_selesai_akses)) }} WITA)</p>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                <p class="small no-margin">
                    <span class="hint-text "><a href="{{ route('reset-password') }}">Reset Password</a></span>
                </p>
            </div>
        </div>
        <div class="text-center mt-5 mb-5 start-button">
            <button class="btn btn-primary btn-lg btn-rounded text-center" data-toggle="modal"
                data-target="#modalKonfirmasiMulaiTes">
                <span class="material-icons">
                    start
                </span> Mulai Tes
            </button>
        </div>
    </div>
    <div class="col-md-8 b-l b-grey sm-b-b">
        <!-- START WIDGET widget_tableWidget-->
        <div class="widget-11 card   no-margin widget-loader-bar">
            <div class="card-header">
                <div class="card-title">Pedoman Test Psikotest
                </div>
                <div class="card-controls">
                    <ul>
                        <li><a data-toggle="refresh" class="card-refresh" href="#"><i
                                    class="card-icon card-icon-refresh"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-l-20 p-r-20 p-b-10 p-t-5">
                <div class="pull-left">
                    <h3 class="text-primary no-margin">Harap Membaca Pedoman Berikut Sebelum Melanjutkan</h3>
                </div>
            </div>
            <div class="widget-11-table auto-overflow">
                <ol>
                    <li>Lakukan perubahan password dengan menekan tombol reset password.</li>
                    <li>Sesi tes telah diatur oleh admin untuk setiap peserta, sehingga peserta hanya bila melakukan satu kali akses untuk
                    mengerjaak soal.</li>
                    <li>Hasil tes akan tampil pada bagian kiri, dibawah keterangan jadwal tes.</li>
                    <li>Psikotest ini terbagi menjadi 3 Kategori Soal, yaitu :
                        <ul>
                            <li>
                                Soal Kecerdasan
                            </li>
                            <li>
                                Soal Kepribadian
                            </li>
                            <li>
                                Soal Sikap Kerja
                            </li>
                        </ul>
                    </li>
                    <li>Masing-masing kategori soal telah memiliki durasi kerja yang berbeda.</li>
                    <li>Pastikan seluruh soal telah terjawab dengan benar disetiap kategori, lalu tekan tombol selesaikan untuk pindah ke
                    kategori soal berikutnya.</li>
                    <li>Kerjan dengan Jujur</li>
                </ol>
            </div>
        </div>
        <!-- END WIDGET -->
    </div>

</div>
@endsection