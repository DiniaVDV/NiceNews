<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dinia">

    <title>Админ панель</title>
    <!-- jQuery -->
    <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.cs') }}s" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/color-picker.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}"  rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="SHORTCUT ICON" href="{{ asset('/favicon.png') }}" type="image/png">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
        body{
            padding-top: 5px;
        }
    </style>
</head>
	<body>
        <div id="wrapper">
            @include('admin.navbar')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')

                    </div>
                </div>
             </div>
         </div>


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/dist/js/sb-admin-2.js') }}"></script>

    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @include('layouts.footer')
    @include('admin.scripts')
	</body>
</html>