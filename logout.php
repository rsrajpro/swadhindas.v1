<?php
session_start();

if($_SESSION["loggedin"] == "loggedin"){
    session_destroy();
    header("location: index.php");
    exit();
}