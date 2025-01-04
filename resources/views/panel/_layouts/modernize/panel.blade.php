<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-bs-theme="light"
      data-color-theme="Blue_Theme" data-layout="vertical" data-boxed-layout="full" data-card="shadow">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'New Project') }} - @yield('_titulo_pagina_') </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Core Css -->
    <link rel="stylesheet" href="{!! asset('modernize/dist/assets/css/styles.css') !!}"/>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{!! asset('modernize/dist/assets/images/logos/favicon.png') !!}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet"
          href="{!! asset('modernize/dist/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') !!}">
    {{----}}

    {{--datatable--}}
    <link rel="stylesheet" href="{!! asset('modernize/dist/assets/css/dataTables.bootstrap5.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('modernize/dist/assets/css/buttons.dataTables.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('modernize/dist/assets/css/dataTable.min.css') !!}">

    {{--select2--}}
    {{--        <link rel="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/select2/dist/css/select2.min.css">--}}
    <link rel="stylesheet" href="{!! asset('css/select2.css') !!}">


    <style>
        /*dataTable search*/
        /*div.dataTables_filter {
            text-align: right;
        }*/

        /*ajustes datatable*/
        div.dataTables_paginate {
            margin: 15px !important;
        }

        /*ajuste do tema - cor do tema verde*/
        .sidebar-nav ul .sidebar-item .sidebar-link:hover {
            background-color: rgb(27 195 107 / 10%) !important;
            color: #20b04e !important;
        }

        .sidebar-nav ul .sidebar-item.selected > .sidebar-link, .sidebar-nav ul .sidebar-item.selected > .sidebar-link.active, .sidebar-nav ul .sidebar-item > .sidebar-link.active {
            background-color: rgb(27 195 107 / 10%) !important;
            color: #20b04e !important;
        }

        .bg-info-subtle {
            background-color: #e8f9f0 !important;
        }

        body {
            background: #fbfbfb !important;
        }

        /*fim ajuste tema*/

    </style>

    @yield('styles')

</head>

<body class="link-sidebar" data-sidebartype="full" cz-shortcut-listen="true" style="">
<!-- Preloader -->
<div class="preloader" style="display: none;">
    <img src="{{ asset('modernize/dist/assets/images/logos/favicon.png') }}" alt="loader"
         class="lds-ripple img-fluid">
</div>

<div id="main-wrapper">

    @php
        $logo = asset('modernize/dist/assets/images/logos/img.png')
    @endphp

            <!-- Sidebar Start -->
    @include('panel._layouts.modernize.main-navigation')
    <!--  Sidebar End -->

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
         data-sidebar-position="fixed" data-header-position="fixed">
        {{--TopBar--}}
        @include('panel._layouts.modernize.topnavbar')
        {{--Topbar End--}}

        {{--body--}}
        <div class="body-wrapper">
            <div class="container-fluid mw-100">
                @yield('content')
            </div>
        </div>
        {{--@include('panel._layouts.modernize.footer')--}}
    </div>
</div>

</body>
<!-- End wrapper-->

<input type="hidden" id="data-table-translate" value="{{ asset('modernize/dist/assets/libs/dataTable/pt-br.json') }}">
{{----}}
@php
    $includesJs = [
        asset('modernize/dist/assets/js/vendor.min.js'),
        asset('modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'),
        asset('modernize/dist/assets/libs/simplebar/dist/simplebar.min.js'),
        asset('modernize/dist/assets/js/theme/app.init.js'),
        asset('modernize/dist/assets/js/theme/theme.js'),
        asset('modernize/dist/assets/js/theme/app.min.js'),
        asset('modernize/dist/assets/js/theme/sidebarmenu.js'),
        asset('modernize/dist/assets/js/iconify-icon.min.js'),#solar icons
        asset('modernize/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js'),
        /*dataTables*/
        asset('modernize/dist/assets/libs/dataTable/iconify-icon.min.js'),
        asset('modernize/dist/assets/libs/dataTable/jquery.dataTables.min.js'),
        asset('modernize/dist/assets/libs/dataTable/dataTables.buttons.min.js'),
        asset('modernize/dist/assets/libs/dataTable/jszip.min.js'),
        asset('modernize/dist/assets/libs/dataTable/pdfmake.min.js'),
        asset('modernize/dist/assets/libs/dataTable/vfs_fonts.js'),
        asset('modernize/dist/assets/libs/dataTable/buttons.html5.min.js'),
        asset('modernize/dist/assets/libs/dataTable/buttons.print.min.js'),
        asset('modernize/dist/assets/libs/dataTable/datatable-advanced.init.js'),
        /*end dataTables*/
        asset('modernize/dist/assets/js/toast.js'),
        asset('modernize/dist/assets/js/ajax.js'),
        asset('modernize/dist/assets/js/destroy.js'),
        asset('js/functions.js'),
        asset('js/custom-datepicker.js'),
        asset('js/custom-masks.js'),
        asset('js/data-table.js'),
        asset('js/custom-select2.js'),
    ];
@endphp

@foreach ($includesJs as $js)
    <script src="{!! $js !!}"></script>
@endforeach

@section('scripts')
@show

<script>

    @if (Session::has('message'))
    showToast('{{ session('messageType') }}', '{{ session('message') }}');
    @endif

    @if (count($errors) > 0)
    showToast(
        'e',
        '{{ count($errors)==1 ? 'Existe um erro de validação' : 'Existem '.count($errors).' erros de validação' }}'
    );
    @endif

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function handleColorTheme(e) {
        document.documentElement.setAttribute("data-color-theme", e);
    }

</script>

</body>
</html>
