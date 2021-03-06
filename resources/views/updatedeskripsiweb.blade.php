<!DOCTYPE html>
<a>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Monitoring | data</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/adminlte/css/AdminLTE.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="/adminlte/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="/adminlte/index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>KLHK</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Sistem Monitoring</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="/adminlte/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Admin</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Admin
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Admin</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span>
                                <span class="pull-right-container">
                                    <span class="label label-primary pull-right">2</span>
                                </span></a></li>
                        <ul class="treeview-menu">
                            <li><a href="../layout/top-nav.html"><i class="fa fa-pie-chart"></i> Pie Chart</a></li>
                            <li><a href="../layout/boxed.html"><i class="fa fa-bar-chart"></i> Bar Chart</a></li>
                            </li>
                        </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-briefcase"></i> <span>Eselon 1</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('deskripsiweb')}}"><i class="fa fa-circle-o"></i>Sekretariat Jenderal</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Inspektorat Jenderal</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Planologi Kehutanan Dan<p style="text-indent: 1.6em;">Lingkungan</p>
                                    </a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Konservasi Sumber Daya<p style="text-indent: 1.6em;"> Alam Dan Ekosistem</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Pengendalian DAS Dan<p style="text-indent: 1.6em;">Hutan Lindung</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Pengelolaan Hutan Dan <p style="text-indent: 1.6em;">Produksi Lestari</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Pengendalian Pencemaran <p style="text-indent: 1.6em;">Dan Kerusakan Lingkungan</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Pengelolaan Sampah, <p style="text-indent: 1.6em;">Limbah Dan B3</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Pengendalian Perubahan <p style="text-indent: 1.6em;">Iklim</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Perhutanan Sosial Dan<p style="text-indent: 1.6em;"> Kemitraan Lingkungan</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Penegakan Hukum <p style="text-indent: 1.6em;">Lingkungan Hidup Dan Kehutanan</p></a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>BP2SDM</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>Badan Litbang Dan <p style="text-indent: 1.6em;">Inovasi</p></a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-th"></i> <span>Pages</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">Update</small>
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Monitoring</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> WEBSITE</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> SISTEM INFORMASI</a></li>
                            </ul>
                        </li>
                        <!--<li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>UI Elements</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
              <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
              <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
              <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
              <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
              <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
            </ul>
          </li>-->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>User</span>
                                <span class="pull-right-container">
                                    <!-- <i class="fa fa-angle-left pull-right"></i>-->
                                </span>
                            </a>
                            <!--<ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                            </ul>-->
                        </li>
                        <!--<li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
              <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
            </ul>
          </li>
          <li>
            <a href="../calendar.html">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
          <li>
            <a href="../mailbox/mailbox.html">
              <i class="fa fa-envelope"></i> <span>Mailbox</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
              </span>
            </a>
          </li>
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-folder"></i> <span>Examples</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
              <li><a href="profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
              <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>
              <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
              <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
              <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
              <li class="active"><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              <li><a href="pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level One
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
          </li>
          <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
          <li class="header">LABELS</li>
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="{{url('/deskripsiweb')}}"><i class="fa fa-briefcase"></i> Sekretariat Jenderal</a></li>
                        <li class="active">Tambah Data</li>
                    </ol>
                </section>

                <!-- Main content
        <section class="content">-->
                <!-- Main Section -->
                <section class="main-section">
                    <!-- Add Your Content Inside -->
                    <div class="content">
                        <!-- Remove This Before You Start -->
                        <h1>Update Data</h1>
                        <hr>
                        <!-- Menampilkan error validasi -->
                        <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif -->
                        <form action="{{url('/updatedeskripsiweb/update')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id_eselon1" value="{{$deskripsi_web->id_eselon1}}">
                            <input type="hidden" name="id" value="{{$deskripsi_web->id}}">
                            <div class="form-group">
                                <label for="nama_url">Nama URL:</label>
                                <input type="text" class="form-control" id="name_url" name="nama_url" placeholder="Nama Url" value="{{$deskripsi_web->nama_url}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_eselon">Nama Eselon:</label>
                                <input type="text" class="form-control" id="nama_eselon" name="nama_eselon" value="{{$deskripsi_web->nama_eselon}}">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" rows="5" class="form-control" id="deskripsi" placeholder="Deskripsi..">{{$deskripsi_web->deskripsi}}</textarea>
                            </div>
                            <!--<div class="form-group">
                                <label for="status">Status:</label><br>
                                <input type="text" class="form-control" id="status" name="status">
                            </div>-->
                            <div class="form-group">
                                <label for="status">Status:</label><br>
                                <select name="web_status" id="" class="form-control">
                                    @if($deskripsi_web->status == "1")
                                    <option value="1" selected>Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                    @else
                                    <option value="1">Aktif</option>
                                    <option value="0" selected>Tidak Aktif</option>
                                    @endif

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Image:</label>
                                <input type="file" id="image" name="tampilan">
                            </div>
                    </div>
                    <div class="form-group">
                        <span style="margin: 25px">
                            <input type="submit" class="btn btn-md btn-primary" value="Ubah">
                            <a href="{{url('/deskripsiweb/1')}}" type="reset" class="btn btn-md btn-danger" onclick="return confirm('ingin melewatkan perubahan?');">Batal</a>
                        </span>
                    </div>
                    </form>
            </div>
            <!-- /.content -->
            </section>
            <!-- /.main-section -->
        </div>



        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>&emsp;Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
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
                    <!-- /.control-sidebar-menu -->

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
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
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
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="/adminlte/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/adminlte/js/demo.js"></script>
        <script>
            $(document).ready(function() {
                $('.sidebar-menu').tree()
            })
        </script>
    </body>

    </html>
