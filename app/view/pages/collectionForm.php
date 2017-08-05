<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 8/5/2017
 * Time: 9:16 AM
 */
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WRF Holdings(Pvt) Ltd</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../../css/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../css/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../../css/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../css/dist/css/AdminLTE.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../../../css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="../../../css/dist/css/skins/skin-blue.min.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>WRF Holdings(Pvt) Ltd</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../../../css/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>#outlet supervisor</p>

                </div>
            </div>

            <!-- search form (Optional) -->
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

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->


                <!..Daily sales section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Daily Sales</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Account Summary</a></li>
                        <li><a href="#">Collection Reports</a></li>
                    </ul>
                </li>
                <!../Daily sales section..>


                <!..Payroll section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Payroll</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Run Payroll</a></li>
                        <li><a href="#">Salary Reports</a></li>
                    </ul>
                </li>
                <!../PAyroll section..>


                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Petty cash</span></a></li>


                <!..Master Information section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Master Information</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="employee.php">Employees</a></li>

                        <li class="treeview">
                            <a href="#"><i class="fa fa-link"></i> <span>Delivery Vehicles</span>
                                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Insuarance</a></li>
                                <li><a href="#">Vehicle reports</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Your Outlet</a></li>
                    </ul>
                </li>
                <!../Master Information section..>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Daily Account Summary
                <small></small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Daily Sales</a></li>
                <li class="active">Account Summary</li>
            </ol>
        </section>

        <!-- Main content -->

        <section class="content">
            <div class="container">
                <div class="row form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="active"><a href="#collection1">
                                    <h4 class="list-group-item-heading">Collection 1</h4>
                                    <p class="list-group-item-text">Enter the collection summary</p>
                                </a></li>
                            <li class="active"><a href="#collection2">
                                    <h4 class="list-group-item-heading">Collection 2</h4>
                                    <p class="list-group-item-text">Enter the collection summary</p>
                                </a></li>
                            <li class="active"><a href="#collection3">
                                    <h4 class="list-group-item-heading">Collection 3</h4>
                                    <p class="list-group-item-text">Enter the collection summary</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <form class="container">
                <div class="row setup-content" id="collection1">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <?php

                            ?>
                            <div class="container col-xs-12">
                                <div class="row clearfix">
                                    <div class="col-md-12 column">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </section>
