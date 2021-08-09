<?php

include './connection.php';

if(isset($_SESSION['alogin']) OR isset($_SESSION['slogin']))
{
echo "please login";}
else{
echo "<p>You Are Done</p>";
}












?>