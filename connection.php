<?php

$con=mysqli_connect("localhost", "root", "", "inventory");

if (mysqli_connect_errno()) {
          echo "<script>alert('DB Connected unSuccesfully ... !')</script>";
}else{
     //echo "<script>alert('DB Connected Succesfully ... !')</script>";
}

?>