<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css') }}" />

    <!-- @stack('css') -->
</head>
<body class="app sidebar-mini ltr light-mode">
    <!-- global loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /global loader -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('components.topbar')  
            @include('components.sidebar') 

            <main class="py-1">
                <!--app-content open-->
                <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">@yield('title')</h1>
                                <div>
                                    <ol class="breadcrumb">
                                    @section('breadcrumb')
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    @show
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->
                            
                            <!-- content start -->
                            @yield('content')
                            <!-- content end -->
                        
                        </div>
                        <!-- CONTAINER END -->
                    </div>
                </div>
                <!--app-content close-->
            </main>
    
        </div>
    </div>

    <!-- BACK-TO-TOP -->
    <!-- <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a> -->

    <!-- JQUERY JS -->
    <script src="{{asset ('assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset ('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- INPUT MASK JS -->
    <script src="{{asset ('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset ('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- TypeHead js -->
    <script src="{{asset ('assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{asset ('assets/js/typehead.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{asset ('assets/js/sticky.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset ('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset ('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{asset ('assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{asset ('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset ('assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{asset ('assets/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{asset ('assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset ('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <script src="{{asset ('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{asset ('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{asset ('assets/js/table-data.js') }}"></script>

    <!-- SWEET-ALERT JS -->
    <script src="{{asset ('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset ('assets/js/index1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{asset ('assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset ('assets/js/custom.js') }}"></script>

    @if (session('success'))
    <script>
        swal("Sukses!","{{ session('success') }}","success", 200);
    </script>
    @endif

    @if (session('error'))
    <script>
        swal("Gagal!","{{ session('error') }}","error");
    </script>
    @endif
    
</body>
</html>
