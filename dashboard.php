<?php
$pagename = "Dashboard";
include('header.php');
if ($_SESSION["loggedin"] !== "loggedin"){
    header("location: sign in.php");
    exit();
}
?>
