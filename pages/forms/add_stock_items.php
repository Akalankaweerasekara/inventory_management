<!DOCTYPE html>

<?php
include '../../connection.php';
$dname = "";
$dcode = "";
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INVENTORY MANAGEMENT SYSTEM | Add Stock Item</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
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
                                <h1>Stock</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../../dashboard.php">Stock</a></li>
                                    <li class="breadcrumb-item active">Add Stock Item</li>
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
                                        <h3 class="card-title">Add Stock Item</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="add_stock_items.php" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item Name</label>
                                                <input type="text" name="itname" class="form-control" id="exampleInputEmail1" placeholder="Enter Item Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Category</label>
                                                <select class="form-control select2" name="itcat" style="width: 100%;">

                                                    <?php
                                                    global $con;

                                                    $query = "select * from category";

                                                    $gdata_query = mysqli_query($con, $query);
                                                    while ($grows = mysqli_fetch_array($gdata_query)) {
                                                        $catnm = $grows['category_name'];
                                                        $catcode = $grows['category_code'];

                                                        echo "<option value='$catcode'>$catnm</option>";
                                                    }
                                                    ?>                      
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sub Category</label>
                                                <select class="form-control select2" name="itsubcat" style="width: 100%;">

                                                    <?php
                                                    global $con;

                                                    $query1 = "select * from sub_category";

                                                    $gdata_query1 = mysqli_query($con, $query1);
                                                    while ($grows1 = mysqli_fetch_array($gdata_query1)) {
                                                        $scatnm = $grows1['scategory_name'];
                                                        $scatcode = $grows1['scategory_code'];

                                                        echo "<option value='$scatcode'>$scatnm</option>";
                                                    }
                                                    ?>                      
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" name="itdes" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Supplier</label>
                                                <input type="text" name="itsup" class="form-control" id="exampleInputEmail1" placeholder="Enter Supplier Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Purchase Order NO</label>
                                                <input type="number" name="itpono" class="form-control" id="exampleInputPassword1" placeholder="Enter Purchase Order NO" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date of Purchase</label>
                                                <input type="datetime-local" name="idop" class="form-control" id="exampleInputEmail1" placeholder="Enter Date of Purchase" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Quantity</label>
                                                <input type="number" name="iqty" class="form-control" id="exampleInputPassword1" placeholder="Enter Quantity" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Warranty</label>
                                        
                                                <select class="form-control select2" name="iwty" style="width: 100%;">
                                                    <option value='1month'>1 Month Warrenty</option>
                                                    <option value='3month'>3 Month Warrenty</option>
                                                    <option value='6month'>6 Month Warrenty</option>
                                                    <option value='1year'>1 Year Warrenty</option>
                                                    <option value='2year'>2 Year Warrenty</option>
                                                    <option value='3year'>3 Year Warrenty</option>
                                                    <option value='5year'>5 Year Warrenty</option>
                                                    <option value='10year'>10 Year Warrenty</option>
                                                                      
                                                </select>
                                            
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Warrenty in Calander</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="iwtyc" class="form-control float-right" id="reservation">
                                                </div>  
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
                                                    <a href="add_stock_ items.php" type="submit" name="clr" class="btn btn-primary">Clear</a>
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

        
        <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
        
        
        
        
        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
            $(function () {
                bsCustomFileInput.init();
                $('#reservation').daterangepicker();
            });
            
        </script>
        <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
    </body>
</html>


<?php
if (isset($_POST['smit'])) {
    $itnm = $_POST['itnm'];
    $itcat = $_POST['itcat'];
    $itsubcat = $_POST['itsubcat'];
    $itdes = $_POST['itdes'];
    $isup = $_POST['itsup'];
    $ipono = $_POST['ipono'];
    $idop = $_POST['idop'];
    $iqty = $_POST['iqty'];
    $iwty = $_POST['iwty'];
    $iwtyc = $_POST['iwtyc'];
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