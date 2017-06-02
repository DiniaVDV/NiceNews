<div id="wrapper">
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="tables.html"><i class="fa fa-table fa-fw"></i> Категории<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ asset('admin_panel/categories')}}"><i class="fa fa-edit fa-fw"></i>Редактировать</a>
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
                            <a href="{{ asset('admin_panel/articles') }}"><i class="fa fa-edit fa-fw"></i>Редактировать</a>
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
                            <a href="{{ asset('admin_panel/adverts') }}"><i class="fa fa-edit fa-fw"></i>Редактировать</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin_panel/adverts/create') }}">Добавить</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-dashboard fa-fw"></i>Меню пользователя<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ asset('admin_panel/navbar/edit') }}"><i class="fa fa-edit fa-fw"></i>Редактировать</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin_panel/navbar/create') }}">Добавить</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ asset('admin_panel/color_background') }}"><i class="fa fa-dashboard fa-fw"></i>Внешний вид страницы<span class="fa arrow"></span></a>

                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
</div>