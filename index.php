<?php
require_once "configurator.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="author" content="João Moreno">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin|Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contatos</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o"></i>
                    <!--Injetar php selct para cada update trigguer-->
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!--Trigguer select update-->
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
            </li>
            <!--<li class="nav-item">-->
            <!--<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i-->
            <!--class="fa fa-th-large"></i></a>-->
            <!--</li>-->
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Controle</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <!--select name in admin
                     pegar o usuario da seção-->
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Dashboard
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Drones
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.php" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Cadastrar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/CadastroDrone.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Atualizar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Excluir</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Mercado
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.php" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Cadastrar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/CadastroDrone.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Atualizar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Excluir</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Produtos
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.php" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Cadastrar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/CadastroDrone.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Atualizar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Excluir</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Categorias
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="general.php" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Cadastrar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/CadastroDrone.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Atualizar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Excluir</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Produtos por mercado
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.php" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Visualizar</p>
                                </a>

                        </ul>
                </ul>
                <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"  data-accordion="false">
                    <li class="nav-header">APP's</li>
                     <li class="nav-item">
                         <a href="pages/calendar.html" class="nav-link">
                             <i class="nav-icon fa fa-calendar"></i>
                                 <p>
                                  Calendar
                              <span class="badge badge-info right">2</span>
                                 </p>
                        </a>
                </li>
               </ul>>

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
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <!--                                    --><?php
                                    //                                    $consulta = $db->$sql("SELECT COUNT(idPedido) FROM Pedidos ;");
                                    //                                    echo $consulta;
                                    //                                    ?>
                                </h3>

                                <p> Quantidade Pedidos recentes</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Mais informações<i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
<!--                            --><?php
 //                                    $consulta = $db->$sql("SELECT COUNT(idProduto) FROM Produto ;");
//                                    echo $consulta;
 //                                 ?>
                                </h3>

                                <p>Produtos em estoque</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">Mais informações <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">

                                <h3>
                                    <!--                                    --><?php
                                    //                                    $consulta = $db->$sql("SELECT COUNT(idCliente) FROM Cliente ;");
                                    //                                    echo $consulta;
                                    //                                    ?>
                                </h3>

                                <p>Registro de usuarios</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">Mais informações <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                    <!--                                    --><?php
                                    //                                    $consulta = $db->$sql("SELECT COUNT(idMercado) FROM Mercado ;");
                                    //                                        echo $consulta;
                                    //                                    ?>
                                </h3>

                                <p>Mercado Cadastrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">Mais informações<i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <!--<div class="row">-->
                <!--&lt;!&ndash; Left col &ndash;&gt;-->
                <!--<section class="col-lg-7 connectedSortable">-->
                <!--&lt;!&ndash; Custom tabs (Charts with tabs)&ndash;&gt;-->
                <!--<div class="card">-->
                <!--<div class="card-header d-flex p-0">-->
                <!--<h3 class="card-title p-3">-->
                <!--<i class="fa fa-pie-chart mr-1"></i>-->
                <!--Sales-->
                <!--</h3>-->
                <!--<ul class="nav nav-pills ml-auto p-2">-->
                <!--<li class="nav-item">-->
                <!--<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--<a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</div>&lt;!&ndash; /.card-header &ndash;&gt;-->
                <!--<div class="card-body">-->
                <!--<div class="tab-content p-0">-->
                <!--&lt;!&ndash; Morris chart - Sales &ndash;&gt;-->
                <!--<div class="chart tab-pane active" id="revenue-chart"-->
                <!--style="position: relative; height: 300px;"></div>-->
                <!--<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>-->
                <!--</div>-->
                <!--</div>&lt;!&ndash; /.card-body &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card &ndash;&gt;-->

                <!--&lt;!&ndash; DIRECT CHAT &ndash;&gt;-->
                <!--<div class="card direct-chat direct-chat-primary">-->
                <!--<div class="card-header">-->
                <!--<h3 class="card-title">Direct Chat</h3>-->

                <!--<div class="card-tools">-->
                <!--<span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>-->
                <!--<button type="button" class="btn btn-tool" data-widget="collapse">-->
                <!--<i class="fa fa-minus"></i>-->
                <!--</button>-->
                <!--<button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"-->
                <!--data-widget="chat-pane-toggle">-->
                <!--<i class="fa fa-comments"></i>-->
                <!--</button>-->
                <!--<button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>-->
                <!--</button>-->
                <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-header &ndash;&gt;-->
                <!--<div class="card-body">-->
                <!--&lt;!&ndash; Conversations are loaded here &ndash;&gt;-->
                <!--<div class="direct-chat-messages">-->
                <!--&lt;!&ndash; Message. Default to the left &ndash;&gt;-->
                <!--<div class="direct-chat-msg">-->
                <!--<div class="direct-chat-info clearfix">-->
                <!--<span class="direct-chat-name float-left">Alexander Pierce</span>-->
                <!--<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-info &ndash;&gt;-->
                <!--<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">-->
                <!--&lt;!&ndash; /.direct-chat-img &ndash;&gt;-->
                <!--<div class="direct-chat-text">-->
                <!--Is this template really for free? That's unbelievable!-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-text &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-msg &ndash;&gt;-->

                <!--&lt;!&ndash; Message to the right &ndash;&gt;-->
                <!--<div class="direct-chat-msg right">-->
                <!--<div class="direct-chat-info clearfix">-->
                <!--<span class="direct-chat-name float-right">Sarah Bullock</span>-->
                <!--<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-info &ndash;&gt;-->
                <!--<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">-->
                <!--&lt;!&ndash; /.direct-chat-img &ndash;&gt;-->
                <!--<div class="direct-chat-text">-->
                <!--You better believe it!-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-text &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-msg &ndash;&gt;-->

                <!--&lt;!&ndash; Message. Default to the left &ndash;&gt;-->
                <!--<div class="direct-chat-msg">-->
                <!--<div class="direct-chat-info clearfix">-->
                <!--<span class="direct-chat-name float-left">Alexander Pierce</span>-->
                <!--<span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-info &ndash;&gt;-->
                <!--<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">-->
                <!--&lt;!&ndash; /.direct-chat-img &ndash;&gt;-->
                <!--<div class="direct-chat-text">-->
                <!--Working with AdminLTE on a great new app! Wanna join?-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-text &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-msg &ndash;&gt;-->

                <!--&lt;!&ndash; Message to the right &ndash;&gt;-->
                <!--<div class="direct-chat-msg right">-->
                <!--<div class="direct-chat-info clearfix">-->
                <!--<span class="direct-chat-name float-right">Sarah Bullock</span>-->
                <!--<span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-info &ndash;&gt;-->
                <!--<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">-->
                <!--&lt;!&ndash; /.direct-chat-img &ndash;&gt;-->
                <!--<div class="direct-chat-text">-->
                <!--I would love to.-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-text &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-msg &ndash;&gt;-->

                <!--</div>-->
                <!--&lt;!&ndash;/.direct-chat-messages&ndash;&gt;-->

                <!--&lt;!&ndash; Contacts are loaded here &ndash;&gt;-->
                <!--<div class="direct-chat-contacts">-->
                <!--<ul class="contacts-list">-->
                <!--<li>-->
                <!--<a href="#">-->
                <!--<img class="contacts-list-img" src="dist/img/user1-128x128.jpg">-->

                <!--<div class="contacts-list-info">-->
                <!--<span class="contacts-list-name">-->
                <!--Count Dracula-->
                <!--<small class="contacts-list-date float-right">2/28/2015</small>-->
                <!--</span>-->
                <!--<span class="contacts-list-msg">How have you been? I was...</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.contacts-list-info &ndash;&gt;-->
                <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash; End Contact Item &ndash;&gt;-->
                <!--<li>-->
                <!--<a href="#">-->
                <!--<img class="contacts-list-img" src="dist/img/user7-128x128.jpg">-->

                <!--<div class="contacts-list-info">-->
                <!--<span class="contacts-list-name">-->
                <!--Sarah Doe-->
                <!--<small class="contacts-list-date float-right">2/23/2015</small>-->
                <!--</span>-->
                <!--<span class="contacts-list-msg">I will be waiting for...</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.contacts-list-info &ndash;&gt;-->
                <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash; End Contact Item &ndash;&gt;-->
                <!--<li>-->
                <!--<a href="#">-->
                <!--<img class="contacts-list-img" src="dist/img/user3-128x128.jpg">-->

                <!--<div class="contacts-list-info">-->
                <!--<span class="contacts-list-name">-->
                <!--Nadia Jolie-->
                <!--<small class="contacts-list-date float-right">2/20/2015</small>-->
                <!--</span>-->
                <!--<span class="contacts-list-msg">I'll call you back at...</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.contacts-list-info &ndash;&gt;-->
                <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash; End Contact Item &ndash;&gt;-->
                <!--<li>-->
                <!--<a href="#">-->
                <!--<img class="contacts-list-img" src="dist/img/user5-128x128.jpg">-->

                <!--<div class="contacts-list-info">-->
                <!--<span class="contacts-list-name">-->
                <!--Nora S. Vans-->
                <!--<small class="contacts-list-date float-right">2/10/2015</small>-->
                <!--</span>-->
                <!--<span class="contacts-list-msg">Where is your new...</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.contacts-list-info &ndash;&gt;-->
                <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash; End Contact Item &ndash;&gt;-->
                <!--<li>-->
                <!--<a href="#">-->
                <!--<img class="contacts-list-img" src="dist/img/user6-128x128.jpg">-->

                <!--<div class="contacts-list-info">-->
                <!--<span class="contacts-list-name">-->
                <!--John K.-->
                <!--<small class="contacts-list-date float-right">1/27/2015</small>-->
                <!--</span>-->
                <!--<span class="contacts-list-msg">Can I take a look at...</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.contacts-list-info &ndash;&gt;-->
                <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash; End Contact Item &ndash;&gt;-->
                <!--<li>-->
                <!--<a href="#">-->
                <!--<img class="contacts-list-img" src="dist/img/user8-128x128.jpg">-->

                <!--<div class="contacts-list-info">-->
                <!--<span class="contacts-list-name">-->
                <!--Kenneth M.-->
                <!--<small class="contacts-list-date float-right">1/4/2015</small>-->
                <!--</span>-->
                <!--<span class="contacts-list-msg">Never mind I found...</span>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.contacts-list-info &ndash;&gt;-->
                <!--</a>-->
                <!--</li>-->
                <!--&lt;!&ndash; End Contact Item &ndash;&gt;-->
                <!--</ul>-->
                <!--&lt;!&ndash; /.contacts-list &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.direct-chat-pane &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-body &ndash;&gt;-->
                <!--<div class="card-footer">-->
                <!--<form action="#" method="post">-->
                <!--<div class="input-group">-->
                <!--<input type="text" name="message" placeholder="Type Message ..." class="form-control">-->
                <!--<span class="input-group-append">-->
                <!--<button type="button" class="btn btn-primary">Send</button>-->
                <!--</span>-->
                <!--</div>-->
                <!--</form>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-footer&ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash;/.direct-chat &ndash;&gt;-->

                <!--&lt;!&ndash; TO DO List &ndash;&gt;-->
                <!--<div class="card">-->
                <!--<div class="card-header">-->
                <!--<h3 class="card-title">-->
                <!--<i class="ion ion-clipboard mr-1"></i>-->
                <!--To Do List-->
                <!--</h3>-->

                <!--<div class="card-tools">-->
                <!--<ul class="pagination pagination-sm">-->
                <!--<li class="page-item"><a href="#" class="page-link">&laquo;</a></li>-->
                <!--<li class="page-item"><a href="#" class="page-link">1</a></li>-->
                <!--<li class="page-item"><a href="#" class="page-link">2</a></li>-->
                <!--<li class="page-item"><a href="#" class="page-link">3</a></li>-->
                <!--<li class="page-item"><a href="#" class="page-link">&raquo;</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-header &ndash;&gt;-->
                <!--<div class="card-body">-->
                <!--<ul class="todo-list">-->
                <!--<li>-->
                <!--&lt;!&ndash; drag handle &ndash;&gt;-->
                <!--<span class="handle">-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--</span>-->
                <!--&lt;!&ndash; checkbox &ndash;&gt;-->
                <!--<input type="checkbox" value="" name="">-->
                <!--&lt;!&ndash; todo text &ndash;&gt;-->
                <!--<span class="text">Design a nice theme</span>-->
                <!--&lt;!&ndash; Emphasis label &ndash;&gt;-->
                <!--<small class="badge badge-danger"><i class="fa fa-clock-o"></i> 2 mins</small>-->
                <!--&lt;!&ndash; General tools such as edit or delete&ndash;&gt;-->
                <!--<div class="tools">-->
                <!--<i class="fa fa-edit"></i>-->
                <!--<i class="fa fa-trash-o"></i>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                <!--<span class="handle">-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--</span>-->
                <!--<input type="checkbox" value="" name="">-->
                <!--<span class="text">Make the theme responsive</span>-->
                <!--<small class="badge badge-info"><i class="fa fa-clock-o"></i> 4 hours</small>-->
                <!--<div class="tools">-->
                <!--<i class="fa fa-edit"></i>-->
                <!--<i class="fa fa-trash-o"></i>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                <!--<span class="handle">-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--</span>-->
                <!--<input type="checkbox" value="" name="">-->
                <!--<span class="text">Let theme shine like a star</span>-->
                <!--<small class="badge badge-warning"><i class="fa fa-clock-o"></i> 1 day</small>-->
                <!--<div class="tools">-->
                <!--<i class="fa fa-edit"></i>-->
                <!--<i class="fa fa-trash-o"></i>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                <!--<span class="handle">-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--</span>-->
                <!--<input type="checkbox" value="" name="">-->
                <!--<span class="text">Let theme shine like a star</span>-->
                <!--<small class="badge badge-success"><i class="fa fa-clock-o"></i> 3 days</small>-->
                <!--<div class="tools">-->
                <!--<i class="fa fa-edit"></i>-->
                <!--<i class="fa fa-trash-o"></i>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                <!--<span class="handle">-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--</span>-->
                <!--<input type="checkbox" value="" name="">-->
                <!--<span class="text">Check your messages and notifications</span>-->
                <!--<small class="badge badge-primary"><i class="fa fa-clock-o"></i> 1 week</small>-->
                <!--<div class="tools">-->
                <!--<i class="fa fa-edit"></i>-->
                <!--<i class="fa fa-trash-o"></i>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                <!--<span class="handle">-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--<i class="fa fa-ellipsis-v"></i>-->
                <!--</span>-->
                <!--<input type="checkbox" value="" name="">-->
                <!--<span class="text">Let theme shine like a star</span>-->
                <!--<small class="badge badge-secondary"><i class="fa fa-clock-o"></i> 1 month</small>-->
                <!--<div class="tools">-->
                <!--<i class="fa fa-edit"></i>-->
                <!--<i class="fa fa-trash-o"></i>-->
                <!--</div>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-body &ndash;&gt;-->
                <!--<div class="card-footer clearfix">-->
                <!--<button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> Add item</button>-->
                <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card &ndash;&gt;-->
                <!--</section>-->
                <!--&lt;!&ndash; /.Left col &ndash;&gt;-->
                <!--&lt;!&ndash; right col (We are only adding the ID to make the widgets sortable)&ndash;&gt;-->
                <!--<section class="col-lg-5 connectedSortable">-->

                <!--&lt;!&ndash; Map card &ndash;&gt;-->
                <!--<div class="card bg-primary-gradient">-->
                <!--<div class="card-header no-border">-->
                <!--<h3 class="card-title">-->
                <!--<i class="fa fa-map-marker mr-1"></i>-->
                <!--Visitors-->
                <!--</h3>-->
                <!--&lt;!&ndash; card tools &ndash;&gt;-->
                <!--<div class="card-tools">-->
                <!--<button type="button"-->
                <!--class="btn btn-primary btn-sm daterange"-->
                <!--data-toggle="tooltip"-->
                <!--title="Date range">-->
                <!--<i class="fa fa-calendar"></i>-->
                <!--</button>-->
                <!--<button type="button"-->
                <!--class="btn btn-primary btn-sm"-->
                <!--data-widget="collapse"-->
                <!--data-toggle="tooltip"-->
                <!--title="Collapse">-->
                <!--<i class="fa fa-minus"></i>-->
                <!--</button>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-tools &ndash;&gt;-->
                <!--</div>-->
                <!--<div class="card-body">-->
                <!--<div id="world-map" style="height: 250px; width: 100%;"></div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-body&ndash;&gt;-->
                <!--<div class="card-footer bg-transparent">-->
                <!--<div class="row">-->
                <!--<div class="col-4 text-center">-->
                <!--<div id="sparkline-1"></div>-->
                <!--<div class="text-white">Visitors</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                <!--<div class="col-4 text-center">-->
                <!--<div id="sparkline-2"></div>-->
                <!--<div class="text-white">Online</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                <!--<div class="col-4 text-center">-->
                <!--<div id="sparkline-3"></div>-->
                <!--<div class="text-white">Sales</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.row &ndash;&gt;-->
                <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card &ndash;&gt;-->

                <!--&lt;!&ndash; solid sales graph &ndash;&gt;-->
                <!--<div class="card bg-info-gradient">-->
                <!--<div class="card-header no-border">-->
                <!--<h3 class="card-title">-->
                <!--<i class="fa fa-th mr-1"></i>-->
                <!--Sales Graph-->
                <!--</h3>-->

                <!--<div class="card-tools">-->
                <!--<button type="button" class="btn bg-info btn-sm" data-widget="collapse">-->
                <!--<i class="fa fa-minus"></i>-->
                <!--</button>-->
                <!--<button type="button" class="btn bg-info btn-sm" data-widget="remove">-->
                <!--<i class="fa fa-times"></i>-->
                <!--</button>-->
                <!--</div>-->
                <!--</div>-->
                <!--<div class="card-body">-->
                <!--<div class="chart" id="line-chart" style="height: 250px;"></div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-body &ndash;&gt;-->
                <!--<div class="card-footer bg-transparent">-->
                <!--<div class="row">-->
                <!--<div class="col-4 text-center">-->
                <!--<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"-->
                <!--data-fgColor="#39CCCC">-->

                <!--<div class="text-white">Mail-Orders</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                <!--<div class="col-4 text-center">-->
                <!--<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"-->
                <!--data-fgColor="#39CCCC">-->

                <!--<div class="text-white">Online</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                <!--<div class="col-4 text-center">-->
                <!--<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"-->
                <!--data-fgColor="#39CCCC">-->

                <!--<div class="text-white">In-Store</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; ./col &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.row &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-footer &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card &ndash;&gt;-->

                <!--&lt;!&ndash; Calendar &ndash;&gt;-->
                <!--<div class="card bg-success-gradient">-->
                <!--<div class="card-header no-border">-->

                <!--<h3 class="card-title">-->
                <!--<i class="fa fa-calendar"></i>-->
                <!--Calendar-->
                <!--</h3>-->
                <!--&lt;!&ndash; tools card &ndash;&gt;-->
                <!--<div class="card-tools">-->
                <!--&lt;!&ndash; button with a dropdown &ndash;&gt;-->
                <!--<div class="btn-group">-->
                <!--<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">-->
                <!--<i class="fa fa-bars"></i></button>-->
                <!--<div class="dropdown-menu float-right" role="menu">-->
                <!--<a href="#" class="dropdown-item">Add new event</a>-->
                <!--<a href="#" class="dropdown-item">Clear events</a>-->
                <!--<div class="dropdown-divider"></div>-->
                <!--<a href="#" class="dropdown-item">View calendar</a>-->
                <!--</div>-->
                <!--</div>-->
                <!--<button type="button" class="btn btn-success btn-sm" data-widget="collapse">-->
                <!--<i class="fa fa-minus"></i>-->
                <!--</button>-->
                <!--<button type="button" class="btn btn-success btn-sm" data-widget="remove">-->
                <!--<i class="fa fa-times"></i>-->
                <!--</button>-->
                <!--</div>-->
                <!--&lt;!&ndash; /. tools &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-header &ndash;&gt;-->
                <!--<div class="card-body p-0">-->
                <!--&lt;!&ndash;The calendar &ndash;&gt;-->
                <!--<div id="calendar" style="width: 100%"></div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card-body &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.card &ndash;&gt;-->
                <!--</section>-->
                <!--&lt;!&ndash; right col &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.row (main row) &ndash;&gt;-->
                <!--</div>&lt;!&ndash; /.container-fluid &ndash;&gt;-->
                </section>

                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer" style="alignment-baseline: bottom">
                    <strong>Aplicação CRUD para disciplina de BDII.</strong>

                    <div class="float-right d-none d-sm-inline-block">
                        <b>Versão</b>0.0.1-Beta
                    </div>
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->

                <!-- ./wrapper -->

                <!-- jQuery -->
                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                <script>
                    $.widget.bridge('uibutton', $.ui.button)
                </script>
                <!-- Bootstrap 4 -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Morris.js charts -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
                <script src="plugins/morris/morris.min.js"></script>
                <!-- Sparkline -->
                <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
                <!-- jvectormap -->
                <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                <!-- jQuery Knob Chart -->
                <script src="plugins/knob/jquery.knob.js"></script>
                <!-- daterangepicker -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
                <script src="plugins/daterangepicker/daterangepicker.js"></script>
                <!-- datepicker -->
                <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
                <!-- Bootstrap WYSIHTML5 -->
                <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
                <!-- Slimscroll -->
                <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
                <!-- FastClick -->
                <script src="plugins/fastclick/fastclick.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="dist/js/pages/dashboard.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script>
</body>
</html>
