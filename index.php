<?php

session_start();
?> 

<!DOCTYPE html>

<?php
include 'connection.php';
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gampaha Wickramarachchi University | Log in</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


    </head>
    <body class="hold-transition login-page" style="  background: linear-gradient(to bottom, #efeff5 -15%, #d0d0e2 50%);">



        <div class="login-box" >
            <div class="login-logo" style="font-size: 22px;">
                <a href="index.php" style="font-weight: 390;"><b style="font-weight: 800;">GAMPAHA WICKRAMARACHCHI</b>&nbsp; UNIVERSITY OF INDEIGENOUS MEDICINE</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body" style="  background-color: #800000; color:white; ">
                    <p class="login-box-msg">Inventory Management System</p>
                    <p class="login-box-msg" style="font-weight: 400;"><?php echo(date("Y-m-d")); ?></p>

                    <form action="index.php" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="uname" class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span style="color: white;" class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="pwd" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span style="color: white;"  class="fas fa-lock"></span>
                                </div>
                            </div>
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

                        <div class="row">
                            <div class="col-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" name="logg" class="btn btn-success">Login</button>
                            </div>

                            <!-- /.col -->
                        </div>
                    </form>


                    <!-- /.social-auth-links -->


                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="../../plugins/toastr/toastr.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>


        <!-- Page specific script -->
    </body>
</html>

<?php

if (isset($_POST['logg'])) {
    global $con;

    $uname = $_POST['uname'];
    $pass = $_POST['pwd'];
    $dep = $_POST['dept'];


    $query = "select * from user where username='$uname' and password='$pass' and dept_code='$dep'";

    $smt_query = mysqli_query($con, $query);
    $get_data = mysqli_num_rows($smt_query);
    $rowg = mysqli_fetch_array($smt_query);
    $gdp=$rowg['dept_code'];

    if ($get_data > 0) {
        if ($gdp=="1") {
            $_SESSION['alogin'] = $rowg['emp_code'];
        echo "<script>swal('Login Message', 'Login Successfully ... !', 'success');</script>";
        echo "<script>document.location='dashboard.php'</script>";
        }else if ($gdp=="19") {
            $_SESSION['slogin'] = $rowg['emp_code'];
        echo "<script>swal('Login Message', 'Login Successfully ... !', 'success');</script>";
        echo "<script>document.location='sdashboard.php'</script>";
        }else{
            $_SESSION['ologin'] = $rowg['emp_code'];
        echo "<script>swal('Login Message', 'Login Successfully ... !', 'success');</script>";
        echo "<script>document.location='odashboard.php'</script>";
        }
    } else {
        echo"<script>swal('Login Message', 'Login Failed ... !', 'error');</script>";
    }
}
?>
