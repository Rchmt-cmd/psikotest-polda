@extends('layouts.app')

@section('content')
<div class="row full-height no-margin py-3">

    <div class="col-md-3 b-r b-grey sm-b-b full-height overflow-auto">
        @livewire('daftar-jadwal')
        <div class="text-center">
            <button class="btn btn-primary btn-sm btn-rounded text-center" data-toggle="modal"
                data-target="#modalTambahJadwal">
                <i class="pg-icon">add</i> Tambah Jadwal
            </button>
        </div>
    </div>
    <div class="col-md-9 full-height overflow-auto">
        <div class="row no-margin">
            <div class="col-md-6">
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
                            <h3 class="text-primary no-margin">{{ auth()->user()->name }}</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                        <p class="small no-margin">
                            <span class="hint-text "><a href="{{ route('password.request') }}">Reset Password</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
                            <h3 class="text-primary no-margin">{{ $jumlahSoal }} Soal</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                        <p class="small no-margin">
                            <span class="hint-text ">Lihat selengkapnya di halaman <a
                                    href="{{ route('daftar-soal') }}">Daftar
                                    Soal</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-margin">
            <div class="col-md-12">
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
                        <h3 class="pull-right text-primary semi-bold no-margin">
                            {{ $jumlah_peserta }}
                        </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-11-table auto-overflow">
                        <table class="table table-condensed table-hover">
                            <tbody>
                                @foreach ($dataSingkatPeserta as $dsp)
                                <tr>
                                    <td class="fs-12">{{ $dsp->name }}</td>
                                    <td class="text-right">
                                        <span class="hint-text small">{{ $dsp->email }}</span>
                                    </td>
                                    <td class="text-right b-r b-dashed b-grey">
                                        <span class="hint-text small">status</span>
                                    </td>
                                    <td>
                                        <span class="font-montserrat fs-18">
                                            @if($dsp->status_tes == 1)
                                            <i class="text-success">Selesai</i>
                                            @else
                                            <i class="text-danger">Belum</i>
                                            @endif
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                        <p class="small no-margin">
                            <span class="hint-text ">Lihat selengkapnya di halaman <a
                                    href="{{ route('daftar-peserta') }}">Daftar
                                    Peserta</a></span>
                        </p>
                    </div>
                </div>
                <!-- END WIDGET -->
            </div>
        </div>
    </div>
</div>
@endsection