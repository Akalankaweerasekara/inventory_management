<?php
session_start();
error_reporting(0);

if (strlen($_SESSION['alogin']) == 0) {
    header('location:../../index.php');
} else {
    $sdp = $_SESSION['alogin'];
    ?>

    <!DOCTYPE html>

    <?php
    include '../../connection.php';
    $guname = "";
    $gpwd = "";
    $gdepcode = "";
    $gname = "";
    $gecode = "";
    $gtele = "";
    $gecode = "";
    ?>
    <?php
    if (isset($_POST['srch'])) {
        $decode = $_POST['ecode'];

        global $con;
        $query2 = "select * from user where emp_code='$decode'";
        $submit_query2 = mysqli_query($con, $query2);
        while ($gtuser = mysqli_fetch_array($submit_query2)) {
            $guname = $gtuser['username'];
            $gpwd = $gtuser['password'];
            $gdepcode = $gtuser['dept_code'];
            $gname = $gtuser['name'];
            $gecode = $gtuser['emp_code'];
            $gtele = $gtuser['telephone'];
        }
    }
    ?>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>INVENTORY MANAGEMENT SYSTEM | Create User</title>

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
                                <a href="#" class="d-block">Super Admin</a>
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
                                    <a href="../../dashboard.php" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fa fa-thermometer"></i>
                                        <p>
                                            Faculties & Divisions
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/forms/create_faculty.php" class="nav-link">
                                                <i class="far fa-circle text-warning nav-icon"></i>
                                                <p>Create Faculty</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/forms/view_faculties.php" class="nav-link">
                                                <i class="far fa-circle text-info nav-icon"></i>
                                                <p>View Faculties</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Departments
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="create_department.php" class="nav-link">
                                                <i class="far fa-circle text-warning nav-icon"></i>
                                                <p>Create Department</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="view_departments.php" class="nav-link">
                                                <i class="far fa-circle text-info nav-icon"></i>
                                                <p>View Departments</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Category
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="create_categories.php" class="nav-link">
                                                <i class="far fa-circle text-warning nav-icon"></i>
                                                <p>Create Category</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="view_categories.php" class="nav-link">
                                                <i class="far fa-circle text-info nav-icon"></i>
                                                <p>View Categories</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-bars"></i>
                                        <p>
                                            Sub Category
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="create_subcategories.php" class="nav-link">
                                                <i class="far fa-circle text-warning nav-icon"></i>
                                                <p> Create Sub Category</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="view_subcategories.php" class="nav-link">
                                                <i class="far fa-circle text-info nav-icon"></i>
                                                <p>View Sub Categories</p>
                                            </a>
                                        </li>

                                    </ul>
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
                                            <a href="create_users.php" class="nav-link">
                                                <i class="far fa-circle text-warning nav-icon"></i>
                                                <p> Create User</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="view_users.php" class="nav-link">
                                                <i class="far fa-circle text-info nav-icon"></i>
                                                <p>View All Users</p>
                                            </a>
                                        </li>
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
                                            <a href="add_stock_items.php" class="nav-link">
                                                <i class="far fa-circle text-warning nav-icon"></i>
                                                <p> Add Stock Item</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="view_stock_items.php" class="nav-link">
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
                                            <a href="view_equipment_department_requests.php" class="nav-link">
                                                <i class="far fa-circle text-warning nav-icon"></i>
                                                <p> View Equipment Requests</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="issue_equipment_orders.php" class="nav-link">
                                                <i class="far fa-circle text-info nav-icon"></i>
                                                <p>Issue Equipment Orders</p>
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
                                                <p> Serialized Equipments</p>
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
                                    <h1>Users</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Users</a></li>
                                        <li class="breadcrumb-item active">Create User</li>
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
                                            <h3 class="card-title">Create User</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form action="create_users.php" method="POST">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Employee Code</label>
                                                    <input type="text" name="ecode" value="<?php echo $gecode; ?>"  class="form-control" id="exampleInputEmail1" placeholder="Search by Employee Code" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Username</label>
                                                    <input type="email" name="uname" value="<?php echo $guname; ?>" class="form-control" id="exampleInputPassword1" placeholder="Put Your Email Here">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input type="password" name="pwd" value="<?php echo $gpwd; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Password Here">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="nme" value="<?php echo $gname; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name Here">
                                                </div>
                                                <div class="form-group">
                                                    <label style="margin-left: 0px;;">Select Your Department</label>
                                                    <select class="form-control select2" name="dept" style="width: 100%;">

    <?php
    global $con;

    $query = "select * from department";

    $gdata_query = mysqli_query($con, $query);
    while ($grows = mysqli_fetch_array($gdata_query)) {
        $gdname = $grows['dname'];
        $gdcode = $grows['dcode'];

        echo "<option value='$gdcode'>$gdname</option>";
    }
    ?>                      
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Telephone</label>
                                                    <input type="tel" name="telephone" value="<?php echo $gtele; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Telephone">
                                                </div>

                                            </div>
                                            <!-- /.card-body -->

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="card-footer">
                                                        <button type="submit" name="suv" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="card-footer">
                                                        <button type="submit" name="upd" class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="card-footer">
                                                        <button type="submit" name="srch" class="btn btn-primary">Search</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="card-footer">
                                                        <a href="create_users.php" type="submit" name="clr" class="btn btn-primary">Clear</a>
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
    if (isset($_POST['suv'])) {
        $decode = $_POST['ecode'];
        $duname = $_POST['uname'];
        $dpwd = $_POST['pwd'];
        $dnme = $_POST['nme'];
        $ddept = $_POST['dept'];
        $dtelephone = $_POST['telephone'];
        global $con;
        $query1 = "insert into user(emp_code,username,password,dept_code,name,telephone)values('$decode','$duname','$dpwd','$ddept','$dnme','$dtelephone')";
        $submit_query1 = mysqli_query($con, $query1);

        if ($submit_query1) {
            echo"<script>swal('User Message ', 'User Details Saved ... !', 'success');</script>";
        } else {
            echo"<script>swal('User Message ', 'User Details Not Saved ... !', 'success');</script>";
        }
    }
    ?>

    <?php
    if (isset($_POST['upd'])) {
        $decode = $_POST['ecode'];
        $duname = $_POST['uname'];
        $dpwd = $_POST['pwd'];
        $dnme = $_POST['nme'];
        $ddept = $_POST['dept'];
        $dtelephone = $_POST['telephone'];

        global $con;
        $query5 = "update user set username='$duname',password='$dpwd',name='$dnme',telephone='$dtelephone' where emp_code='$decode'";
        $squery = mysqli_query($con, $query5);
        if ($squery) {
            echo"<script>swal('User Message ', 'User Details Updated ... !', 'success');</script>";
        } else {
            echo"<script>swal('User Message', 'User Details Not Updated ... !', 'error');</script>";
        }
    }
    ?>

    <?php
}
?>