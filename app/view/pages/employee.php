<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 7/24/2017
 * Time: 5:41 PM
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


                <!..PAyroll section..>
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Employee Information
                <small>#Outlet name here</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Information</a></li>
                <li class="active">Employees</li>
            </ol>
        </section>

        <!-- Main content -->

        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Register new employees</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="../../model/employees_model.php" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="fullName">Full name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <label for="nameWithInitials">Name with initials</label>
                                    <input type="text" class="form-control" id="nameWithInitials" placeholder="Name with initials">
                                </div>
                                <div class="form-group">
                                    <label for="nic">NIC No</label>
                                    <input type="text" class="form-control" id="nic" placeholder="NIC No">
                                </div>
                                <div class="form-group">
                                    <label>Date of birth</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group">
                                    <label>Select designation</label>
                                    <select class="form-control">
                                        <option>Outlet Supervisor </option>
                                        <option>Delivery driver</option>
                                        <option>Collection officer</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Contact number</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask='"mask": "(94) 99 9 999999"' data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label for="address">Home address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Home address">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email(If any)</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
     <?php

    include '../includes/footer.php';

    ?>


    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../../css/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../css/dist/js/adminlte.min.js"></script>
<!-- InputMask -->
<script src="../../../css/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../../css/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../../css/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- bootstrap datepicker -->
<script src="../../../css/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    }
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>







