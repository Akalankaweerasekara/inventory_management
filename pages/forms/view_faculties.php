<?php
session_start();
error_reporting(0);

if(strlen($_SESSION['alogin'])==0)
	{	
 
header('location:../../index.php');
}
else{
    $sdp=$_SESSION['alogin'];
	?>

<!DOCTYPE html>

<?php
include '../../connection.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INVENTORY MANAGEMENT SYSTEM | View All Faculties</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
                                <h1>Faculties</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../../dashboard.php">Faculties</a></li>
                                    <li class="breadcrumb-item active">View All Faculties</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <!-- /.row -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">View All Faculties</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Faculty Code</th>
                                            <th>Faculty Name</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?Php
                                        global $con;
                                        $query = "select * from faculty";
                                        $gtdata = mysqli_query($con, $query);

                                        while ($gdd = mysqli_fetch_array($gtdata)) {
                                            $tdname = $gdd['faculty_name'];
                                            $tdcode = $gdd['faculty_code'];

                                            echo "<tr>
                    <td>$tdcode</td>
                    <td>$tdname</td>
                    <td><a href='facdelete.php?facid=$tdcode'><span class='btn btn-block btn-danger'>Delete</span></a></td>
                    
                  </tr>";
                                        }
                                        ?>



                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Faculty Code</th>
                                            <th>Faculty Name</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
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
        <!-- DataTables  & Plugins -->
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/jszip/jszip.min.js"></script>
        <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <script>
            $(function () {
                bsCustomFileInput.init();
            });
        </script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </body>
</html>


<?php
if (isset($_POST['smit'])) {
    $dname = $_POST['dname'];
    $dcode = $_POST['dcode'];
    global $con;
    $query = "insert into department(dname,dcode)values('$dname','$dcode')";
    $submit_query = mysqli_query($con, $query);

    if ($submit_query) {
        echo "<script>alert('Department Submitted ... !')</script>";
    } else {
        echo "<script>alert('Department not Submitted ... !')</script>";
    }
}
?>

<?php

}

?>