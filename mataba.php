<?php
session_start();
error_reporting(0);
include './connection.php';
//
//if(isset($_SESSION['alogin']) OR isset($_SESSION['slogin']))
//{
//echo "please login";}
//else{
//echo "<p>You Are Done</p>";
//}
//
//
//
//

if((strlen($_SESSION['alogin'])==0) and (strlen($_SESSION['slogin'])==0))
	{	
  header('location:index.php');

        }
else{
    echo 'fff';

}





?>