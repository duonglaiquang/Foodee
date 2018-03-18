<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{ HTML::style('bower/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::style('bower/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('bower/Ionicons/css/ionicons.min.css') }}
    {{ HTML::style('bower/jvectormap/jquery-jvectormap.css') }}
    {{ HTML::style('bower/admin-lte/dist/css/AdminLTE.min.css') }}
    {{ HTML::style('bower/admin-lte/dist/css/skins/_all-skins.min.css') }}
    {{ HTML::style('bower/toastr/toastr.min.css') }}
    {{ HTML::style('css/admin/manage.css') }}
{{--     <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
    @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" >
        <header class="main-header">
            <a href="{{ route('user.profile',Auth::user()->id) }}" class="logo">
                <span class="logo-mini"><b>A</b></span>
                <span class="logo-lg"><b>Admin</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i><span>Home</span></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar" id = "home">
            <section class="sidebar nav-fix-header">
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active menu-open">
                        <a href="{{ route('admin_home') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Manager</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('manage.customer') }}"><i class="fa fa-circle-o"></i> Manager User</a></li>
                            <li><a href="{{ route('manage_food') }}"><i class="fa fa-circle-o"></i> <span>Manager Food</span>
                            <span class="pull-right-container"><small class="label pull-right bg-red">@{{food_sl}}</small></span>
                            </a>
                            </li>
                            <li><a href="{{ route('manage_drink') }}"><i class="fa fa-circle-o"></i> <span>Manager Drink</span>
                            <span class="pull-right-container"><small class="label pull-right bg-red">@{{drink_sl}}</small></span>
                            </a>
                            </li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li >
                        <a href="{{ route('manage.order') }}">
                            <i class="fa fa-calendar"></i> <span>Manage Order</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-blue">@{{inprogress_sl}}</small>
                                <small class="label pull-right bg-yellow">@{{waiting_sl}}</small>
                                <small class="label pull-right bg-green">@{{complete_sl}}</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" id="logout-1">
                            <i class="fa fa-sign-out"></i><span>Logout</span>
                        </a>
                        {!! Form::open(['role'=>'form', 'route'=> 'logout', 'method'=>'POST', 'id'=>'logout-form']) !!}
                        {{ csrf_field() }}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </section>
        </aside>
        @yield('content')
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>team Flash</b>
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
                </div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <h3 class="control-sidebar-heading">Chat Settings</h3>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                        </div>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </aside>
        <div class="control-sidebar-bg"></div>
    </div>
    {{ HTML::script('bower/vue/dist/vue.js') }}
    {{ HTML::script('bower/jquery/dist/jquery.min.js') }}
    {{ Html::script('bower/toastr/toastr.min.js') }}
    {{ HTML::script('bower/axios/dist/axios.min.js') }}
    {{-- {{ HTML::script('bower/admin-lte/dist/js/pages/dashboard2.js') }} --}}
    {{ HTML::script('bower/bootstrap/dist/js/bootstrap.min.js') }}
    {{ HTML::script('bower/fastclick/lib/fastclick.js') }}
    {{ HTML::script('bower/admin-lte/dist/js/adminlte.min.js') }}
    {{ HTML::script('bower/jquery-sparkline/dist/jquery.sparkline.min.js') }}
    {{ HTML::script('bower/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
    {{ HTML::script('bower/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
    {{ HTML::script('bower/jquery-slimscroll/jquery.slimscroll.min.js') }}


    {{ HTML::script('bower/fastclick/lib/fastclick.js') }}
    {{ HTML::script('bower/chart.js/Chart.js') }}
    {{ HTML::script('bower/admin-lte/dist/js/demo.js') }}
    {{ HTML::script('bower/vue2-filters/dist/vue2-filters.js') }}
    {{ HTML::script('js/admin/admin_page.js') }}
    <script>
        $(document).ready(function () {
            $('#logout-1').on('click', function () {
                $('#logout-form').submit();
            });
        });
    </script>
    @yield('script')
</body>
</html>
