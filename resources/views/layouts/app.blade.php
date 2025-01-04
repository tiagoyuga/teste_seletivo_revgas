<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset("modernize/dist/assets/images/logos/favicon.png") }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Core Css -->
    <link rel="stylesheet" href="{!! asset('modernize/dist/assets/css/styles.css') !!}"/>

    <title>Vem Prevenir</title>

    <style>
    </style>

    @yield('styles')

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('modernize/dist/assets/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div id="main-wrapper" class="auth-customizer-none">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
                        <div class="card mb-0">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Js Files -->
    <script src="{!! asset('modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('modernize/dist/assets/libs/simplebar/dist/simplebar.min.js') !!}"></script>
    <script src="{!! asset('modernize/dist/assets/js/theme/app.init.js') !!}"></script>
    <script src="{!! asset('modernize/dist/assets/js/theme/theme.js') !!}"></script>
    <script src="{!! asset('modernize/dist/assets/js/theme/app.min.js') !!}"></script>

    <script src="{!! asset('modernize/dist/assets/js/vendor.min.js') !!}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    @section('scripts')
    @show

    <script>

    </script>
</body>

</html>