<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dinia">

    <title>Админ панель</title>

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

    <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}"  rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
	<body>
	<div id="wrapper">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Категории<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset('admin_panel/categories')}}">Редактировать</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin_panel/category/create')}}">Добавить</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i>Новости<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset('admin_panel/articles') }}">Редактировать</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin_panel/articles/create') }}">Добавить</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Реклама<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset('admin_panel/advetrs/edit') }}">Редактировать</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin_panel/advetrs/create') }}">Добавить</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i>Меню пользователя<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset('admin_panel/navbar/edit') }}">Редактировать</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin_panel/navbar/create') }}">Добавить</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Внешний вид страницы<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ asset('admin_panel/main_background/create') }}">Изменить фон сайта</a>
                                </li>
                                <li>
                                    <a href="{{ asset('admin_panel/head_background/create') }}">Изменить фон шапки</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </div>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')

                </div>
			</div>
         </div>
    <!-- jQuery -->
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>

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
		<script>
			$('div.alert').not('.alert-important').delay(3000).slideUp(300);

            function confirmDelete(name){
                if(confirm('Вы действительно хотите удалить ' + name + '?')){
                    return true;
                }else {
                    return false;
                }
            }
		</script>
		<script src="{{ asset('js/select2.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".js-example-basic-single").select2();
            });
        </script>
		@include('layouts.footer')
	</body>
</html>