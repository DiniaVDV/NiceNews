<div id="wrapper">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><strong><a href="{{asset('')}}">На главную</a></strong></a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{asset('profile')}}"><i class="fa fa-user fa-fw"></i>Профиль</a>
                </li>
                </li>
                <li class="divider"></li>
                <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out fa-fw"></i>Выйти</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
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
                            <a href="{{ asset('admin_panel/dropdown') }}"><i class="fa fa-edit fa-fw"></i>Редактировать</a>
                        </li>
                        <li>
                            <a href="{{ asset('admin_panel/dropdown/create') }}">Добавить</a>
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