<?php
echo '<html><head><script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html>';

?>

<?php
include '../../connection.php';
?>

<?php

if (isset($_GET['rqtid'])) {
    
    $rqt=$_GET['rqtid'];
    
    $queryr="select * from issueconfirms where id='$rqt'";
    $sbquery1= mysqli_query($con, $queryr);
    $gs= mysqli_fetch_array($sbquery1);
    
    $sid=$gs['id'];
    $sname=$gs['iname'];
    $sqty=$gs['iqty'];
    $srqty=$gs['irqty'];
    $sdep=$gs['rdep'];
    $spp=$gs['rpono'];
    $msg=3;
    $dqty=$sqty-$srqty;
    
    $query44="select * from stock where pono='$spp'";
    $sbquery33= mysqli_query($con, $query44);
    $gs3= mysqli_fetch_array($sbquery33);
    
    $sdf=$gs3['qty'];
    $dqty=$sdf-$srqty;
    
    $query66="update stock set qty='$dqty' where pono='$spp'";
    $sbquery66= mysqli_query($con, $query66);
   
    
    $query12="update issueconfirms set message='$msg' where id='$sid'";
    $sbquery12= mysqli_query($con, $query12);
    
   
    
    
    if ($sbquery12) {
        echo"<script>swal('Equipment Request Message', 'Request Approved Successfully ... !', 'success');</script>";
        echo "<script>document.location='sissue_equipment_orders.php'</script>";
    }else{
        echo"<script>swal('Equipment Request Message', 'Request Approval Failed ... !', 'danger');</script>";
    }
    
}else{
    echo"<script>swal('Equipment Request Message', 'Request Approval Failed ... !', 'danger');</script>";
}

?>