<?php
session_start(); 

unset($_SESSION['wlogin']);

header("location:set.php"); 
?>