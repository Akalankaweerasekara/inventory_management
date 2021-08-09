
<?php

$ecode="";
$uname="";
$pwd="";
$name="";
$dept="";
$telephone="";

?>
<?php
include '../../connection.php';
$dname = "";
$dcode = "";
?>

<?php
session_start();
error_reporting(0);

if(strlen($_SESSION['ologin'])==0)
	{	
 $SS=$_SESSION['ologin'];
 
header('location:index.php');
}
else{
    $sdp=$_SESSION['ologin'];
	?>



<?php

global $con;

$query11="select * from user where dept_code='$sdp'";
$stm_query= mysqli_query($con, $query11);

while ($gttd= mysqli_fetch_array($stm_query)){
    
    $ecode=$gttd['emp_code'];
    $uname=$gttd['username'];
    $pwd=$gttd['password'];
    $name=$gttd['name'];
    $dept=$gttd['dept_code'];
    $telephone=$gttd['telephone'];
    
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
<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INVENTORY MANAGEMENT SYSTEM | My Account</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
            <img src="dist/img/r.png" class="img-circle elevation-2" alt="User Image">
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
              <a href="odashboard.php" class="nav-link">
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
                  <a href="omyaccount.php" class="nav-link">
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
                    <a href="isconfirmations.php" class="nav-link">
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
                  <a href="oserialized_equipments.php" class="nav-link">
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
                  <a href="o_messages.php" class="nav-link">
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
                                <h1>Users</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../../dashboard.php">Users</a></li>
                                    <li class="breadcrumb-item active">My Account</li>
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
                                        <h3 class="card-title">My Account</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="omyaccount.php" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Employee Code</label>
                                                <input type="text" name="ecode" value="<?php echo $ecode; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Code" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Username</label>
                                                <input type="text" name="uname" value="<?php echo $uname; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Username" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" name="pwd" value="<?php echo $pwd; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Name</label>
                                                <input type="text" name="nme" value="<?php echo $name; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Name" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Department</label>
                                                <input type="text" name="dpt" value="<?php echo $dept; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Department" required>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Telephone</label>
                                                <input type="text" name="tp" value="<?php echo $telephone; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Telephone" required>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card-footer">
                                                    <button type="submit" name="smit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="card-footer">
                                                    <a href="omyaccount.php" type="submit" name="clr" class="btn btn-primary">Clear</a>
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
if (isset($_POST['smit'])) {
    $ecodes = $_POST['ecode'];
    $pass = $_POST['pwd'];
    $nme = $_POST['name'];
    $tp = $_POST['tp'];
    global $con;
    $query = "update user set password='$pass',name='$nme',telephone='$tp' where emp_code='$ecodes'";
    $submit_query = mysqli_query($con, $query);

    if ($submit_query) {
        echo "<script>swal('My User Account Message ', 'User Account Updated Successfully ... !', 'success');</script>";
    } else {
        echo "<script>swal('My User Account Message', 'User Account Not Updated ... !', 'error');</script>";
    }
}
?>

<?php

}
?>