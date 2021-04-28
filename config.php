<?php 

$server = "localhost:3307";
$user = "root";
$pass = "";
$database = "theater_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>