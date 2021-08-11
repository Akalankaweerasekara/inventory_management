<?php
session_start();
error_reporting(0);
include './connection.php';

if((strlen($_SESSION['alogin'])==0) and (strlen($_SESSION['slogin'])==0))
	{	
  header('location:../../index.php');

        }
else{
    

?>