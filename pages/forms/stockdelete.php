<?php
echo '<html><head><script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html>';

?>

<?php
include '../../connection.php';
?>

<?php

if (isset($_GET['stkid'])) {
    
    $depid=$_GET['stkid'];
    
    $query="delete from stock where pono='$depid'";
    $sbquery= mysqli_query($con, $query);
    
    if ($sbquery) {
        echo"<script>swal('Stock Information Message', 'Item Deleted Successfully ... !', 'success');</script>";
        echo "<script>document.location='view_stock_items.php'</script>";
    }else{
        echo"<script>swal('Stock Information Message', 'Item Delete Failed ... !', 'error');</script>";
    }
    
}else{
    echo"<script>swal('Stock Information Message', 'Item Delete Failed ... !', 'error');</script>";
}

?>