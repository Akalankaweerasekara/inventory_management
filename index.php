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
</head>
<body class="hold-transition login-page" style="  background: linear-gradient(to bottom, #efeff5 -15%, #d0d0e2 50%);">
    
    <?php
    
   // echo "<script>swal('Success!', 'success', 'success');</script>";
    
    ?>
        
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
              <option value="1" selected="selected" >Department of Ayuruveda Basic Principles</option>
            <option value="2">Department of Dravyagunavijnana</option>
            <option value="3">Department of Cikitsa</option>
            <option value="4">Department of Desiya Cikitsa</option>
            <option value="5">Department of Rogavijinana</option>
            <option value="6">Department of Salya-salaka</option>
            <option value="7">Department of Kaumarabhritya & Striroga</option>
            <option value="8">Department of Languages</option>
            <option value="9">Department of Indigenous Health Sciences</option>
            <option value="10">Department of Technology</option>
            <option value="11">Department of Indigenous Medical Resources</option>
            <option value="12">Department of Indigenous Social Sciences</option>
            <option value="13">Faculty of Graduate Studies</option>
            <option value="14">Library Facility</option>
            <option value="15">Information & Communication Facility </option>
            <option value="16">Sports & Entertainments </option>
            <option value="17">Medical Service</option>
            <option value="18">Career Guidance</option>
            <option value="19">Stores</option>
            <option value="20">Student Welfare Branch</option>
            <option value="21">Maintenance Devision</option>
            <option value="22">Central Lab</option>
            <option value="23">Research & Publication Unit</option>
            <option value="24">Account Branch Ground Floor</option>
            <option value="25">Examination Branch</option>
            <option value="26">General Admin</option>
            <option value="27">Registor Office</option>
            <option value="28">Academic Branch Non Academic Branch</option>
            <option value="29">Media Unit</option>
            <option value="30">VC Office</option>
            <option value="31">Legal Office</option>
            <option value="32">Super Admin</option>
            
            
            
          </select>
        </div>

        <div class="row">
          <div class="col-4">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
              <button type="submit" name="logg" class="btn btn-primary btn-block">Login</button>
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
</body>
</html>

<?php

if (isset($_POST['logg'])) {
    global $con;
    
    $uname=$_POST['uname'];
    $pass=$_POST['pwd'];
    $dep=$_POST['dept'];
    
   
    $query="select * from user where username='$uname' and password='$pass' and dep_code='$dep'";
    
    $smt_query = mysqli_query($con, $query);
    $get_data = mysqli_num_rows($smt_query);
    
    if ($get_data > 0) {
        echo"success";
    }else{
        echo"failed";
    }
    
}

?>
