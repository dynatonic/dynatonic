<?php 

$server = "mysql-dynatonic.alwaysdata.net";
$user = "dynatonic";
$pass = "1barcelonearth";
$database = "dynatonic_login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>