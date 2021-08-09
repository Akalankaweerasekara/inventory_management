 <?php
session_start(); 

unset($_SESSION['slogin']);

header("location:set.php"); 
?>