<?php
session_start();
error_reporting(0);

if(strlen($_SESSION['ologin'])==0)
	{	
 
 
header('location:index.php');
}
else{
    $sd=$_SESSION['ologin'];
	?>

<!DOCTYPE html>

<?php
include '../../connection.php';
$dname = "";
$dcode = "";
$irqty = "";
$iname = "";
$icat = "";
$iicat = "";
$iscat = "";
$iiscat = "";
$ides = "";
$iqty = "";
$irqty = "";
?>


<?php
if (isset($_GET['rqtid'])) {

    $rqtid = $_GET['rqtid'];

    $query = "select * from stock where pono='$rqtid'";
    $sbquery = mysqli_query($con, $query);

    while ($gdd = mysqli_fetch_array($sbquery)) {
        $iname = $gdd['itemname'];
        $iicat = $gdd['category'];
        $iiscat = $gdd['subcat'];
        $ides = $gdd['description'];

        $ipono = $gdd['pono'];

        $iqty = $gdd['qty'];
    }
}
?>

<?php
$query2 = "select * from category where category_code='$iicat'";
$sbquery1 = mysqli_query($con, $query2);

while ($gdd1 = mysqli_fetch_array($sbquery1)) {
    $icat = $gdd1['category_name'];
}
?>

<?php
$query3 = "select * from sub_category where scategory_code='$iiscat'";
$sbquery3 = mysqli_query($con, $query3);

while ($gdd3 = mysqli_fetch_array($sbquery3)) {
    $iscat = $gdd3['scategory_name'];
}
?>


<?php
global $con;
$queryu="select * from department where dcode='$sd'";
$sb_query= mysqli_query($con, $queryu);

while ($gg= mysqli_fetch_array($sb_query)){
    $oname=$gg['dname'];
}



?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INVENTORY MANAGEMENT SYSTEM | Requesting An Item</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="../../dashboard.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="../../index.php" class="nav-link">Log Out</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->


                    <!-- Messages Dropdown Menu -->

                    <!-- Notifications Dropdown Menu -->



                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="../../dashboard.php" class="brand-link">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Inventory control</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="../../dist/img/r.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $oname; ?></a>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="../../odashboard.php" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-user"></i>
                                    <p>
                                        Users
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="myaccount.php" class="nav-link">
                                            <i class="far fa-circle text-danger nav-icon"></i>
                                            <p>My Account</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-book"></i>
                                    <p>
                                        Stock
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="oview_stock_items.php" class="nav-link">
                                            <i class="far fa-circle text-info nav-icon"></i>
                                            <p>View Stock Items</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-ban"></i>
                                    <p>
                                        Equipment
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="rforequipment.php" class="nav-link">
                                            <i class="far fa-circle text-danger nav-icon"></i>
                                            <p> Request For Items</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="view_equipment_department_requests.php" class="nav-link">
                                            <i class="far fa-circle text-info nav-icon"></i>
                                            <p> Issue Confirmations</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="equipment_order_confirmations.php" class="nav-link">
                                            <i class="far fa-circle text-warning nav-icon"></i>
                                            <p>Order Confirmations </p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-bell"></i>
                                    <p>
                                        Serialized Stock
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="serialized_equipments.php" class="nav-link">
                                            <i class="far fa-circle text-warning nav-icon"></i>
                                            <p> Departmentlized Equipments</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-mobile"></i>
                                    <p>
                                        Messages
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="admin_messages.php" class="nav-link">
                                            <i class="far fa-circle text-warning nav-icon"></i>
                                            <p> Send & View Messages</p>
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
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Equipment</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../../odashboard.php">Equipment</a></li>
                                    <li class="breadcrumb-item active">Requesting An Item</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <!-- /.row -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-2"></div>

                            <div class="col-md-8">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Requesting An Item</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item Name</label>
                                                <input type="text" name="iname" value="<?php echo $iname; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Item Name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category</label>
                                                <input type="text" name="icat" value="<?php echo $icat; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Category" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sub Category</label>
                                                <input type="text" name="iscat" value="<?php echo $iscat; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Sub category" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Description</label>
                                                <input type="text" name="ides" value="<?php echo $ides; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter description" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Available Quantity</label>
                                                <input type="text" name="iqty" value="<?php echo $iqty; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Available Quantity" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Requesting Quantity</label>
                                                <input type="text" name="irqty" value="<?php echo $irqty; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter The Quantity Of You Want ?" required>
                                            </div>


                                        </div>
                                        <!-- /.card-body -->

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card-footer">
                                                    <button type="submit" name="rqst" class="btn btn-primary">Request</button>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="card-footer">
                                                    <a href="rforequipment.php" type="submit" name="clr" class="btn btn-primary">Clear</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>

                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>

                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.1.0
                </div>
                <strong>Copyright &copy; 2021-2022 <a href="http://gwai.kln.ac.lk/">Gampaha Wickramarachchi University of Indigenous Medicine</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
            $(function () {
                bsCustomFileInput.init();
            });
        </script>
    </body>
</html>


<?php
if (isset($_POST['rqst'])) {
    $sname = $_POST['iname'];
    $scat = $_POST['icat'];
    $sscat = $_POST['iscat'];
    $sdes = $_POST['ides'];
    $sqty = $_POST['iqty'];
    $srqty = $_POST['irqty'];

    global $con;
    
//    $query11="select qty from stock where pono='$ipono'";
//    $submit_query11= mysqli_query($con, $query11);
//    
//    while ($gdds = mysqli_fetch_array($submit_query11)) {
//        $tqty = $gdds['qty'];
//        
//    }if($tqty<$sdcs){
//        
//    }
    
    if($sqty<$srqty){
        echo "<script>swal('Equipment Message', 'Stock Quantity Not Enough ... !', 'error');</script>";
    }else{
        $query4 = "insert into rfequipment(iname,icat,iscat,ides,iqty,irqty,ipono,rdep)values('$sname','$scat','$sscat','$sdes','$sqty','$srqty','$ipono','$sd')";
    $submit_query4 = mysqli_query($con, $query4);
    
    if ($submit_query4) {
        echo "<script>swal('Equipment Message', 'Equipment Request Submited... !', 'success');</script>";
    } else {
        echo "<script>swal('Equipment Message', 'Equipment Request Not Submited ... !', 'error');</script>";
    }
    }
    
    
}
?>

<?php

}

?>