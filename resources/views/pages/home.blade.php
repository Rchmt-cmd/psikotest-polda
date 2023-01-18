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
                <div class="pull-left">
                    <h3 class="text-primary mb-2 mt-0">{{ auth()->user()->name }}</h3>
                    <table class="full-width">
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin">Status Tes</p>
                            </td>
                            <td>
                                @if (auth()->user()->status_tes)
                                <p class="fs-13 text-success no-margin">: Selesai</p>
                                @else
                                <p class="fs-13 text-danger no-margin">: Belum</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin">Jadwal Tes</p>
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
                <div class="clearfix"></div>
            </div>
            <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                <p class="small no-margin">
                    <span class="hint-text "><a href="{{ route('password.request') }}">Reset Password</a></span>
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
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nihil officiis repellendus fuga
                        quibusdam deleniti ex sapiente optio laborum ullam! Officiis corrupti veritatis, error tenetur
                        laboriosam cupiditate iste neque soluta!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nihil officiis repellendus fuga
                        quibusdam deleniti ex sapiente optio laborum ullam! Officiis corrupti veritatis, error tenetur
                        laboriosam cupiditate iste neque soluta!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nihil officiis repellendus fuga
                        quibusdam deleniti ex sapiente optio laborum ullam! Officiis corrupti veritatis, error tenetur
                        laboriosam cupiditate iste neque soluta!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nihil officiis repellendus fuga
                        quibusdam deleniti ex sapiente optio laborum ullam! Officiis corrupti veritatis, error tenetur
                        laboriosam cupiditate iste neque soluta!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nihil officiis repellendus fuga
                        quibusdam deleniti ex sapiente optio laborum ullam! Officiis corrupti veritatis, error tenetur
                        laboriosam cupiditate iste neque soluta!</li>
                </ol>
            </div>
        </div>
        <!-- END WIDGET -->
    </div>

</div>
@endsection