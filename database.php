<?php
include('env.php');

$db = new mysqli($db_host,$db_user,$db_pass,$db_name);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>