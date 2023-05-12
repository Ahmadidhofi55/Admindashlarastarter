<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ORNOTSHOP | DASHBOARD</title>
    <link rel="shortcut icon" href="./ORNOTDEV.png" type="image/x-icon">
    <!--Aos -->
    <link rel="stylesheet" href="dist/css/aos.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="./ORNOTDEV.png" alt="ORNOTDEV-LOGO" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <img src="./ORNOTDEV.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">ORNOTSHOP</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/admin" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="/admin" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Widgets
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Layout Options
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">ORNOTSHOP Dashboard </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

                                <div class="info-box-content">
                                    @php
                                        $count = DB::table('users')->count();
                                    @endphp
                                    <span class="info-box-text">Users</span>
                                    <span class="info-box-number">
                                        {{ $count }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon  bg-red elevation-1"><i class="fas fa-shopping-bag"></i></span>

                                <div class="info-box-content">
                                    @php
                                        $count = DB::table('produks')->count();
                                    @endphp
                                    <span class="info-box-text">Produk</span>
                                    <span class="info-box-number">
                                        {{ $count }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1">
                                    <i class="fas fa-wallet"></i></span>
                                <div class="info-box-content">
                                    @php
                                        $count = DB::table('metode_pembayarans')->count();
                                    @endphp
                                    <span class="info-box-text">Wallet</span>
                                    <span class="info-box-number">{{ $count }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1">
                                    <i class="fas fa-list-ol"></i>
                                </span>
                                @php
                                $count = DB::table('kategoris')->count();
                            @endphp
                                <div class="info-box-content">
                                    <span class="info-box-text">Kategori</span>
                                    <span class="info-box-number">{{ $count }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1">
                                    <img src="./brand.png" class="w-full" alt="">
                                </span>
                                @php
                                $count = DB::table('mereks')->count();
                            @endphp
                                <div class="info-box-content">
                                    <span class="info-box-text">Merek</span>
                                    <span class="info-box-number">{{ $count }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1">
                                    <img src="./order.png" class="w-full" alt="">
                                </span>
                                @php
                                $count = DB::table('orders')->count();
                            @endphp
                                <div class="info-box-content">
                                    <span class="info-box-text">Order</span>
                                    <span class="info-box-number">{{ $count }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-red elevation-1">
                                    <img src="./pembayaran.png" class="w-full" alt="">
                                </span>
                                @php
                                $count = DB::table('pembayarans')->count();
                            @endphp
                                <div class="info-box-content">
                                    <span class="info-box-text">Pembayaran</span>
                                    <span class="info-box-number">{{ $count }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="https://ornotdev.com">Ahmad Idhofi</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">

        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard2.js"></script>
    <script src="dist/js/aos.js"></script>
</body>

</html>
