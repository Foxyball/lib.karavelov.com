<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Моята библиoтека</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminAssets/assets/materialize/css/materialize.min.css') }}"
        media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{ asset('adminAssets/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('adminAssets/assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('adminAssets/assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('adminAssets/assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('adminAssets/assets/js/Lightweight-Chart/cssCharts.css') }}">
    <script src="https://kit.fontawesome.com/69b6030e72.js" crossorigin="anonymous"></script>

    <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>
    <div id="wrapper">

        <!--/. NAV TOP  -->
        @include('include.sidebar')
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <!-- Header -->
            @include('include.header')
            <!--End Header -->

            <div id="page-inner">

                @yield('content')

            </div>

            @include('include.footer')

            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->

          <!--plugins-->
    <script src="{{ asset('adminAssets/assets/js/jquery.min.js') }}"></script>

        <!-- toastr -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- jquery-validation -->
        <script src="{{ asset('adminAssets/assets/js/validate.min.js') }}"></script>
        <!-- sweetalert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- validation -->
        <script src="{{ asset('adminAssets/assets/js/code.js') }}"></script>

        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;
                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;
                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;
                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            @endif
        </script>

        <!-- jQuery Js -->
        <script src="{{ asset('adminAssets/assets/js/jquery-1.10.2.js') }}"></script>

        <!-- Bootstrap Js -->
        <script src="{{ asset('adminAssets/assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('adminAssets/assets/materialize/js/materialize.min.js') }}"></script>

        <!-- Metis Menu Js -->
        <script src="{{ asset('adminAssets/assets/js/jquery.metisMenu.js') }}"></script>
        <!-- Morris Chart Js -->
        <script src="{{ asset('adminAssets/assets/js/morris/raphael-2.1.0.min.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/morris/morris.js') }}"></script>


        <script src="{{ asset('adminAssets/assets/js/easypiechart.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/easypiechart-data.js') }}"></script>

        <script src="{{ asset('adminAssets/assets/js/Lightweight-Chart/jquery.chart.js') }}"></script>

        <!-- Custom Js -->
        <script src="{{ asset('adminAssets/assets/js/custom-scripts.js') }}"></script>



</body>

</html>
