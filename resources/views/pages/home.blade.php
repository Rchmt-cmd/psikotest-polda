@extends('layouts.app')

@section('content')
<div class="row full-height no-margin py-3">
    <div class="col-md-3 b-r b-grey sm-b-b overflow-auto">
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
                    <h3 class="text-primary mb-2 mt-0">Admin</h3>
                    <table class="full-width">
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin">Status Tes</p>
                            </td>
                            <td>
                                <p class="fs-13 text-danger no-margin">:  Belum</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="fs-13 text-black no-margin">Jadwal Tes</p>
                            </td>
                            <td>
                                <p class="fs-13 text-black no-margin">:  Sabtu, 14 Januari 2023</p>
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
        <div class="text-center mt-5 mb-5">
            <button class="btn btn-primary btn-lg btn-rounded text-center" data-toggle="modal" data-target="#modalTambahJadwal" disabled>
                <span class="material-icons">
                    start
                </span> Mulai Tes
            </button>
        </div>
    </div>
    <div class="col-md-9">
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