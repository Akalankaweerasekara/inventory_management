<?php
echo '<html><head><script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html>';

?>

<?php
include '../../connection.php';
?>

<?php

if (isset($_GET['usid'])) {
    
    $usid=$_GET['usid'];
    
    $query="delete from user where emp_code='$usid'";
    $sbquery= mysqli_query($con, $query);
    
    if ($sbquery) {
        echo"<script>swal('User Information Message', 'User Deleted Successfully ... !', 'success');</script>";
        echo "<script>document.location='view_users.php'</script>";
    }else{
        echo"<script>swal('User Information Message', 'User Not Deleted ... !', 'error');</script>";
    }
    
}else{
    echo"<script>swal('User Information Message', 'User Not Deleted ... !', 'error');</script>";
}

?>