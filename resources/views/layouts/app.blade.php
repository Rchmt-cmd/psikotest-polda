<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icon -->
    <link rel="apple-touch-icon" href="{{ asset('pages/ico/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('pages/ico/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('pages/ico/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('pages/ico/152.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />


    <!-- Styles -->
    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css') }}">
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}">
    <link media="screen" type="text/css" rel="stylesheet"
        href="{{ asset('assets/plugins/datatables-responsive/css/datatables.responsive.css') }}">
    <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ asset('assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"
        media="screen">
    <link href="{{ asset('assets/plugins/mapplic/css/mapplic.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/dashboard.widgets.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link class="main-stylesheet" href="{{ asset('pages/css/pages.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .img_soal {
            width: 100%;
            max-width: 400px;
        }
        .in_put {
            background-color: white;
            display: inline-flex;
            border: none;
            color: #555;
            width: 100%;

        }
        .nav-soal-flyout {
            display: none;
        }

        @media (max-width: 411px) {
            .data-peserta {
                border: none;
            }

            .start-button {
                display: none;
            }

            .soal-wrapper {
                flex-direction: column-reverse;
            }

            .navigation-wrapper {
                padding: 0px !important;
                padding-inline: 10%;
            }

            .navigation-wrapper .row {
                flex-wrap: nowrap;
                flex-direction: row;
            }

            .nav-soal {
                display: none;
            }

            .nav-soal-flyout {
                display: block;
                position: fixed;
                right: 10px;
                top: 50vh;
            }
        }

        @media (max-width: 767px) {
            .data-peserta {
                border: none;
            }

            .start-button {
                display: none;
            }
            .nav-soal {
            display: none;
            }
            
            .nav-soal-flyout {
            display: block;
            }
        }
    </style>

    @livewireStyles

</head>

<body class="fixed-header dashboard">
    @include('partials.modal-konfirmasi-mulai-tes')
    <nav class="page-sidebar" data-pages="sidebar">
        <!-- BEGIN SIDEBAR MENU HEADER-->
        <div class="sidebar-header">
            <img src="{{ asset('assets/img/Psikotes-Logo.png') }}" alt="logo" class="brand"
                data-src="{{ asset('assets/img/Psikotes-Logo.png') }}"
                data-src-retina="{{ asset('assets/img/Psikotes-Logo.png') }}" height="44" style="margin-right:33px;">
            <div class="sidebar-header-controls">
                <button aria-label="Pin Menu" type="button"
                    class="btn btn-icon-link invert d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none"
                    data-toggle-pin="sidebar">
                    <i class="pg-icon"></i>
                </button>
            </div>
        </div>
        <!-- END SIDEBAR MENU HEADER-->
        <!-- START SIDEBAR MENU -->
        <div class="sidebar-menu">
            <!-- BEGIN SIDEBAR MENU ITEMS-->
            <ul class="menu-items">
                @if(auth()->user()->is_admin == 1)
                <li class="m-t-10 ">
                    <a href="{{ route('admin.home') }}" class="detailed">
                        <span class="title">Dashboard</span>
                    </a>
                    <span class="icon-thumbnail"><i class="material-icons">dashboard</i></span>
                </li>
                <li class="m-t-10 ">
                    <a href="{{ route('daftar-peserta') }}" class="detailed">
                        <span class="title">Daftar Peserta</span>
                        <span class="details">Data peserta psikotest</span>
                    </a>
                    <span class="icon-thumbnail"><i class="material-icons">assignment_ind</i></span>
                </li>
                <li class="m-t-10 ">
                    <a href="javascript:;" class="title">
                        <span class="title">Daftar Soal</span>
                    </a>
                    <span class="icon-thumbnail"><i class="material-icons">assignment</i></span>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{ route('soal-kategori-1') }}">Kecerdasan</a>
                            <span class="icon-thumbnail"><i class="pg-icon">1</i></span>
                        </li>
                        <li class="">
                            <a href="{{ route('soal-kategori-2') }}">Kepribadian</a>
                            <span class="icon-thumbnail"><i class="pg-icon">2</i></span>
                        </li>
                        <li class="">
                            <a href="{{ route('soal-kategori-3') }}">Sikap Kerja</a>
                            <span class="icon-thumbnail"><i class="pg-icon">3</i></span>
                        </li>
                    </ul>
                </li>
                <li class="m-t-10 ">
                    <a href="{{ route('hasil-tes') }}" class="detailed">
                        <span class="title">Hasil Tes</span>
                        <span class="details">Data hasil psikotest</span>
                    </a>
                    <span class="icon-thumbnail"><i class="material-icons">assignment_turned_in</i></span>
                </li>
                @else
                <li class="m-t-10 ">
                    <a href="{{ route('home') }}" class="detailed">
                        <span class="title">Dashboard</span>
                        <span class="details">Beranda peserta tes</span>
                    </a>
                    <span class="icon-thumbnail"><i class="material-icons">dashboard</i></span>
                </li>
                <li class="m-t-10 ">
                    <a href="#" class="detailed" data-toggle="modal" data-target="#modalKonfirmasiMulaiTes">
                        <span class="title">Mulai Tes</span>
                        <span class="details">Klik untuk memulai</span>
                    </a>
                    <span class="icon-thumbnail"><i class="material-icons">start</i></span>
                </li>
                @endif
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END SIDEBAR MENU -->
    </nav>

    <div class="page-container ">
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar d-lg-none pg-icon btn-icon-link" data-toggle="sidebar">
                menu</a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline">
                    <img style="margin-left: 25px;" src="{{ asset('assets/img/Psikotes-Logo.png') }}" alt="logo"
                        data-src="{{ asset('assets/img/Psikotes-Logo.png') }}"
                        data-src-retina="{{ asset('assets/img/Psikotes-Logo.png') }}" height="44">
                </div>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="pull-left p-r-10 fs-14 d-lg-inline-block d-none">
                    <span class="semi-bold">{{ Auth::user()->name }}</span>
                </div>
                <div class="dropdown pull-right d-lg-block">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" aria-label="profile dropdown">
                        <span class="thumbnail-wrapper d32 circular inline">
                            <img src="{{ asset('assets/img/profiles/profile_avatar_placeholder_large.png') }}" alt=""
                                data-src="{{ asset('assets/img/profiles/profile_avatar_placeholder_large.png') }}"
                                data-src-retina="{{ asset('assets/img/profiles/profile_avatar_placeholder_large.png') }}" width="32"
                                height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="{{ route('reset-password') }}" class="dropdown-item">Reset Password</a>
                        @guest
                        @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </div>
                <!-- END User Info-->
            </div>
        </div>
        <!-- END HEADER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper content-builder active" id="columns-3-9">
            <!-- START PAGE CONTENT -->
            <div class="content full-height">

                <!-- START CONTAINER FLUID -->
                <div class="container-fluid full-height no-padding">
                    {{-- <main class="py-4"> --}}
                        @yield('content')
                        {{-- </main> --}}
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <div class=" container-fluid  container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small-text no-margin pull-left sm-pull-reset">
                        ©2023 All Rights Reserved
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>

    <!-- BEGIN VENDOR JS -->
    <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}" type="text/javascript"></script>
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="{{ asset('assets/plugins/liga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ asset('assets/plugins/nvd3/lib/d3.v3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/nv.d3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/utils.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/interactiveLayer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/models/axis.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/models/line.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/models/lineWithFocusChart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/mapplic/js/hammer.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/mapplic/js/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/plugins/mapplic/js/mapplic.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{ asset('pages/js/pages.js') }}"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/datatables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}">
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('#formTambahPeserta').validate();
            $('#tableSoal').DataTable({
                "bLengthChange": false, // this gives option for changing the number of records shown in the UI table
                "lengthMenu": [4], // 4 records will be shown in the table
                "columnDefs": [{
                    "className": "dt-left",
                    "targets": "_all"
                } //columnDefs for align text to center
                ],
                "dom": "lrtip", //to hide default searchbox but search feature is not disabled hence customised searchbox can be made.
                "sPaginationType": "bootstrap",
                "sDom": "<'table-responsive't><'row'<p i>>",
            });
            $('#search-table-soal').keyup(function() {
                $('#tableSoal').DataTable().search($(this).val()).draw();
            });
        });
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
            // $('#formTambahPeserta').validate();
            // $('#tableChapter').DataTable({
            //     "bLengthChange": false, // this gives option for changing the number of records shown in the UI table
            //     "lengthMenu": [4], // 4 records will be shown in the table
            //     "columnDefs": [{
            //         "className": "dt-left",
            //         "targets": "_all"
            //     } //columnDefs for align text to center
            //     ],
            //     "dom": "lrtip", //to hide default searchbox but search feature is not disabled hence customised searchbox can be made.
            //     "sPaginationType": "bootstrap",
            //     "sDom": "<'table-responsive't><'row'<p i>>",
            // });
            $('#search-table-chapter').keyup(function() {
                $('#tableChapter').DataTable().search($(this).val()).draw();
            });
        });
    </script> --}}
    <script>
        $(document).load(function() {
            $('#tableHasilTes').DataTable({
                "bLengthChange": false, // this gives option for changing the number of records shown in the UI table
                "lengthMenu": [8], // 4 records will be shown in the table
                "columnDefs": [{
                    "className": "dt-left",
                    "targets": "_all"
                } //columnDefs for align text to center
                ],
                "dom": "lrtip", //to hide default searchbox but search feature is not disabled hence customised searchbox can be made.
                "sPaginationType": "bootstrap",
                "sDom": "<'table-responsive't><'row'<p i>>",
            });
            $(document).ready(function() {
                $('#search-table-hasil-tes').keyup(function() {
                    $('#tableHasilTes').DataTable().search($(this).val()).draw();
                });
            });
        });
    </script>

    <script>
        window.addEventListener('closeModal', event => {
            $('#modalTambahPeserta').modal('hide');
            $('#modalTambahPeserta').removeClass('show');
            $('#modalKonfirmasiPeserta').modal('hide');
            $('#modalKonfirmasiPeserta').removeClass('show');
            $('#modalKonfirmasiPeserta').removeAttr('style');
            $('#modalEditPeserta').modal('hide');
            $('#modalEditPeserta').removeClass('show');
            $('#modalEditPeserta').removeAttr('style');
            $('#modalTambahJadwal').modal('hide');
            $('#modalTambahJadwal').removeClass('show');
            $('#modalEditJadwal').modal('hide');
            $('#modalEditJadwal').removeClass('show');
            $('#modalEditJadwal').removeAttr('style');
            $('#modalKonfirmasiJadwal').modal('hide');
            $('#modalKonfirmasiJadwal').removeClass('show');
            $('#modalKonfirmasiJadwal').removeAttr('style');
            $('#modalKonfirmasiChapterKategori1').modal('hide');
            $('#modalKonfirmasiChapterKategori1').removeClass('show');
            $('#modalKonfirmasiChapterKategori1').removeAttr('style');
            $('#modalKonfirmasiChapterKategori3').modal('hide');
            $('#modalKonfirmasiChapterKategori3').removeClass('show');
            $('#modalKonfirmasiChapterKategori3').removeAttr('style');
            $('#modalKonfirmasiSoalKategori1').modal('hide');
            $('#modalKonfirmasiSoalKategori1').removeClass('show');
            $('#modalKonfirmasiSoalKategori1').removeAttr('style');
            $('#modalKonfirmasiSoalKategori2').modal('hide');
            $('#modalKonfirmasiSoalKategori2').removeClass('show');
            $('#modalKonfirmasiSoalKategori2').removeAttr('style');
            $('#modalKonfirmasiSoalKategori3').modal('hide');
            $('#modalKonfirmasiSoalKategori3').removeClass('show');
            $('#modalKonfirmasiSoalKategori3').removeAttr('style');
            $('#modalEditChapterKategori1').modal('hide');
            $('#modalEditChapterKategori1').removeClass('show');
            $('#modalEditChapterKategori1').removeAttr('style');
            $('#modalEditChapterKategori3').modal('hide');
            $('#modalEditChapterKategori3').removeClass('show');
            $('#modalEditChapterKategori3').removeAttr('style');
            $('#modalEditSoalKategori1').modal('hide');
            $('#modalEditSoalKategori1').removeClass('show');
            $('#modalEditSoalKategori1').removeAttr('style');
            $('#modalEditSoalKategori2').modal('hide');
            $('#modalEditSoalKategori2').removeClass('show');
            $('#modalEditSoalKategori2').removeAttr('style');
            $('#modalEditSoalKategori3').modal('hide');
            $('#modalEditSoalKategori3').removeClass('show');
            $('#modalEditSoalKategori3').removeAttr('style');
            $('#modalKonfirmasiResetSoal').modal('hide');
            $('#modalKonfirmasiResetSoal').removeClass('show');
            $('#modalKonfirmasiResetSoal').removeAttr('style');
            $('#modalKonfirmasiResetSoal2').modal('hide');
            $('#modalKonfirmasiResetSoal2').removeClass('show');
            $('#modalKonfirmasiResetSoal2').removeAttr('style');
            $('#modalKonfirmasiResetSoal3').modal('hide');
            $('#modalKonfirmasiResetSoal3').removeClass('show');
            $('#modalKonfirmasiResetSoal3').removeAttr('style');
            $('#modalKonfirmasiResetHasilTes').modal('hide');
            $('#modalKonfirmasiResetHasilTes').removeClass('show');
            $('#modalKonfirmasiResetHasilTes').removeAttr('style');
            $('#modalKonfirmasiResetPeserta').modal('hide');
            $('#modalKonfirmasiResetPeserta').removeClass('show');
            $('#modalKonfirmasiResetPeserta').removeAttr('style');
            $('body').removeClass('modal-open');
            $('body').removeAttr("style");
        })
    </script>
    <script>
        window.addEventListener('removeModalBackdrop', event => {
            $('.modal-backdrop').remove()
        })
        window.addEventListener('clearCookies', event => {
            localStorage.removeItem('saved_countdown1');
            localStorage.removeItem('saved_countdown2');
            localStorage.removeItem('saved_countdown3');
        })
        window.addEventListener('refresh', event => {
            location.reload();
        })
    </script>
    <script>
        $("#modalLihatPeserta").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalKonfirmasiPeserta").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalEditPeserta").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalEditJadwal").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalTambahJadwal").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalKonfirmasiJadwal").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalKonfirmasiSoalKategori1").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalKonfirmasiSoalKategori3").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalKonfirmasiChapterKategori1").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalKonfirmasiChapterKategori3").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalKonfirmasiChapterKategori2").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalEditChapterKategori1").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalEditChapterKategori3").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalEditSoalKategori1").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalEditSoalKategori2").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
        $("#modalEditSoalKategori3").on("hidden.bs.modal", function () {
        console.log('modal closed');
        window.livewire.emit('closeModal');
        });
    </script>
    <!-- END PAGE LEVEL JS -->

    @livewireScripts
</body>

</html>