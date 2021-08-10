 <?php
session_start(); 

unset($_SESSION['ologin']);

header("location:../../index.php"); 
?>