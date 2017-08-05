<?php
/**
 * Created by PhpStorm.
 * User: hima1993
 * Date: 8/5/2017
 * Time: 11:30 AM
 */

include '../includes/mainHeader.php';

?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Customer Information
                <small>#Outlet name here</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Information</a></li>
                <li class="active">Customers</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Customer Registration</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputCustomerName" >Customer Name</label>

                                        <input type="text" class="form-control" id="inputCustomerName" placeholder="CustomerName">

                                    </div>

                                    <div class="form-group">
                                        <label for="inputCustomerCode" >Customer Code</label>

                                        <input type="text" class="form-control" id="inputCustomerCode" placeholder="CustomerCode">
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
                                        <label>Customer Register Date</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" style="color:white;background-color:deepskyblue;" class="btn btn-info margin"><span>Register</span></button>
                                        <button type="submit" style="color:white;background-color:grey;" class="btn btn-info margin">Update</button>
                                        <button type="submit" style="color:white;background-color:darkgrey;" class="btn btn-info margin">Delete</button>
                                        <button type="submit" class="btn btn-default margin">Clear</button>

                                    </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-xs-12  pull-right">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Current Customers</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Contact Number</th>
                                        <th>Reg Date</th>
                                    </tr>
                                    </thead>
                                </table>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-default pull-right">Clear</button>
                                    <button type="submit" class="btn btn-info pull-left">View All Customers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>


</section>


    </div>





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

</body>
</html>
