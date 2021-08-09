 <?php
session_start(); 

unset($_SESSION['ologin']);

header("location:set.php"); 
?>