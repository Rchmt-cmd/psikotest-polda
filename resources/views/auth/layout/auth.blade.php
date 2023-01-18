<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }} - Login Page</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/login/icomoon/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/login/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/login/css/style2.css') }}">

    <!-- Style -->
    <style>
        @media (max-width:411px){
            .img-fluid{
                max-width: 70%;
            }
            .img-wrapper{
                display: flex;
                justify-content: center;
            }
            .content{
                padding-top: 15%;
            }
        }
        @media (max-width: 375px){
            body{
                overflow: auto;
            }
            .img-fluid{
                display: none;
            }
            .content{
                padding: 0 auto;
            }
        }
    </style>

</head>

<body>
    <div>
        @yield('auth-content')
    </div>


    <!-- BEGIN VENDOR JS -->
    <script src="{{ asset('assets/vendor/login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/login/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/login/js/main2.js') }}"></script>

    <!-- END VENDOR JS -->
</body>

</html>