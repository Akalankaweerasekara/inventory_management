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
    
    $queryr="select * from rfequipment where id='$rqt'";
    $sbquery1= mysqli_query($con, $queryr);
    $gs= mysqli_fetch_array($sbquery1);
    
    $sid=$gs['id'];
    $sname=$gs['iname'];
    $sqty=$gs['iqty'];
    $srqty=$gs['irqty'];
    $spono=$gs['ipono'];
    $sdep=$gs['rdep'];
    $msg=2;
    
    $queryi="insert into issueconfirms(id,message,iname,iqty,irqty,rdep,rpono)values('$sid','$msg','$sname','$sqty','$srqty','$sdep','$spono')";
    $sbquery2= mysqli_query($con, $queryi);
    
    $query="delete from rfequipment where id='$rqt'";
    $sbquery= mysqli_query($con, $query);
    if ($sbquery) {
        echo"<script>swal('Equipment Request Message', 'Request Confirmed Successfully ... !', 'success');</script>";
        echo "<script>document.location='view_equipment_department_requests.php'</script>";
    }else{
        echo"<script>swal('Equipment Request Message', 'Request Confirming Failed ... !', 'danger');</script>";
    }
    
}else{
    echo"<script>swal('Equipment Request Message', 'Request Confirming Failed ... !', 'danger');</script>";
}

?>