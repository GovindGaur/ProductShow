<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <!-- <link rel="stylesheet"
        href="http://localhost/product_show/Modules/SellerShow/Resources/assets/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="{{ Module::asset('SellerShow:plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="http://localhost/product_show/Modules/SellerShow/Resources/assets/css/adminlte.css"> -->

    <link rel="stylesheet" href="{{ Module::asset('SellerShow:css/adminlte.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: right;
        padding-right: .75rem;
    }

    .color-palette.disabled {
        text-align: center;
        padding-right: 0;
        display: block;
    }

    .color-palette-set {
        margin-bottom: 15px;
    }

    .color-palette span {
        display: none;
        font-size: 12px;
    }

    .color-palette:hover span {
        display: block;
    }

    .color-palette.disabled span {
        display: block;
        text-align: left;
        padding-left: .75rem;
    }

    .color-palette-box h4 {
        position: absolute;
        left: 1.25rem;
        margin-top: .75rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->

                <!-- Messages Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                <!-- <div class="media">
                    <img src="http://localhost/product_show/Modules/SellerShow/Resources/assets/img/user1-128x128.jpg"
                        alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div> -->
                <!-- Message End -->
                <!-- </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                        <img src="http://localhost/product_show/Modules/SellerShow/Resources/assets/img/user8-128x128.jpg"
                            alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div> -->
                <!-- Message End -->
                <!-- </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"> -->
                <!-- Message Start -->
                <!-- <div class="media">
                    <img src="http://localhost/product_show/Modules/SellerShow/Resources/assets/img/user3-128x128.jpg"
                        alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div> -->
                <!-- Message End -->
                <!-- </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
    </div>
    </li> -->
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fa fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fa fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item">


                    <a class="nav-link" href="/seller_logout" role="button">
                        <i class="  fa fa-sign-out"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="http://localhost/product_show/Modules/SellerShow/Resources/assets/img/AdminLTELogo.png"
                    alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Product</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="http://localhost/product_show/Modules/SellerShow/Resources/assets/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image"> -->
                        <img src="{{ Module::asset('SellerShow:img/user2-160x160.jpg') }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    @if(Session()->has('seller'))
                    <div class="info">
                        <a href="#" class="d-block"> {{Session::get('seller')['name']}}</a>
                    </div>
                    @endif
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-tachometer"></i>
                                <p>
                                    Dashboard
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-tree"></i>
                                <p>
                                    Product
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Product_show" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>Add Product</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="getProduct" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>Show Product</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="../../index3.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <!-- <div class="content-wrapper"> -->
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Inline Charts</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Inline Charts</li>
                            </ol>
                        </div>
                    </div>
                </div> -->
        <!-- /.container-fluid -->
        <!-- </section> -->

        <!-- Main content -->
        <!-- <section class="content">
            <div class="container-fluid"> -->

        <!-- </div> -->
        <!-- /.container-fluid -->
        <!-- </section> -->
        <!-- /.content -->
        <!-- </div> -->
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <!-- </div> -->
        <!-- ./wrapper -->

        <!-- jQuery -->
        <!-- <script src="http://localhost/product_show/Modules/SellerShow/Resources/assets/plugins/jquery/jquery.min.js">
        </script> -->
        <script src="{{ Module::asset('SellerShow:plugins/jquery/jquery.min.js') }}">
        </script>
        <!-- Bootstrap 4 -->
        <!-- <script
            src="http://localhost/product_show/Modules/SellerShow/Resources/assets/plugins/bootstrap/js/bootstrap.bundle.min.js">
        </script> -->
        <script src="{{ Module::asset('SellerShow:plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
        </script>
        <!-- AdminLTE App -->
        <!-- <script src="http://localhost/product_show/Modules/SellerShow/Resources/assets/js/adminlte.min.js"></script> -->
        <script src="{{ Module::asset('SellerShow:js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="http://localhost/product_show/Modules/SellerShow/Resources/assets/js/demo.js"></script> -->
        <script src="{{ Module::asset('SellerShow:js/demo.js') }}"></script>

</body>

</html>