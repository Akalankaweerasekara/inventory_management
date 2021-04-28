<!DOCTYPE html>
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
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>GAMPAHA WICKRAMARACHCHI</b>&nbsp; UNIVERSITY OF INDEIGENOUS MEDICINE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inventory Management System</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label style="margin-left: 0px;;">Select Your Department</label>
          <select class="form-control select2" style="width: 100%;">
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
            
          </select>
        </div>

        <div class="row">
          <div class="col-4">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
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
