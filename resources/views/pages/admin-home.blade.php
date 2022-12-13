@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Total Soal Terinput
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
                        <h3 class="text-primary no-margin">500 Soal</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                    <p class="small no-margin">
                        <span class="hint-text ">Lihat selengkapnya di halaman <a href="#">Daftar
                                Soal</a></span>
                    </p>
                </div>
            </div>
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
                        <h3 class="text-primary no-margin">Admin</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                    <p class="small no-margin">
                        <span class="hint-text "><a href="#">Reset Password</a></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <!-- START WIDGET widget_tableWidget-->
            <div class="widget-11 card   no-margin widget-loader-bar">
                <div class="card-header">
                    <div class="card-title">Update Peserta Tes
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
                        <h3 class="text-primary no-margin">Total Peserta</h3>
                    </div>
                    <h3 class="pull-right text-primary semi-bold no-margin"><sup>
                        </sup> 102 Orang
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-11-table auto-overflow">
                    <table class="table table-condensed table-hover">
                        <tbody>
                            <tr>
                                <td class=" fs-12">Samsul</td>
                                <td class="text-right">
                                    <span class="hint-text small">samsul@psikotest.com</span>
                                </td>
                                <td class="text-right b-r b-dashed b-grey">
                                    <span class="hint-text small">status</span>
                                </td>
                                <td>
                                    <span class="font-montserrat fs-18">selesai</span>
                                </td>
                            </tr>
                            <tr>
                                <td class=" fs-12">Samsul</td>
                                <td class="text-right">
                                    <span class="hint-text small">samsul@psikotest.com</span>
                                </td>
                                <td class="text-right b-r b-dashed b-grey">
                                    <span class="hint-text small">status</span>
                                </td>
                                <td>
                                    <span class="font-montserrat fs-18">selesai</span>
                                </td>
                            </tr>
                            <tr>
                                <td class=" fs-12">Samsul</td>
                                <td class="text-right">
                                    <span class="hint-text small">samsul@psikotest.com</span>
                                </td>
                                <td class="text-right b-r b-dashed b-grey">
                                    <span class="hint-text small">status</span>
                                </td>
                                <td>
                                    <span class="font-montserrat fs-18">selesai</span>
                                </td>
                            </tr>
                            <tr>
                                <td class=" fs-12">Samsul</td>
                                <td class="text-right">
                                    <span class="hint-text small">samsul@psikotest.com</span>
                                </td>
                                <td class="text-right b-r b-dashed b-grey">
                                    <span class="hint-text small">status</span>
                                </td>
                                <td>
                                    <span class="font-montserrat fs-18">selesai</span>
                                </td>
                            </tr>
                            <tr>
                                <td class=" fs-12">Samsul</td>
                                <td class="text-right">
                                    <span class="hint-text small">samsul@psikotest.com</span>
                                </td>
                                <td class="text-right b-r b-dashed b-grey">
                                    <span class="hint-text small">status</span>
                                </td>
                                <td>
                                    <span class="font-montserrat fs-18">selesai</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                    <p class="small no-margin">
                        <span class="hint-text ">Lihat selengkapnya di halaman <a href="{{ route('daftar-peserta') }}">Daftar Peserta</a></span>
                    </p>
                </div>
            </div>
            <!-- END WIDGET -->
        </div>
    </div>
</div>
@endsection