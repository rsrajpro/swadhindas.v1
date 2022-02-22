<?php
include('env.php');
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'swadhindas.v1';

if($_SESSION["loggedin"] == "loggedin"){
    header("location: index.php");
    exit();
  }
?>