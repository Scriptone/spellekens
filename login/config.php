<?php 

$server = "localhost";
$user = "coworking-login";
$pass = "7u%3hy7K7";
$database = "coworking-login";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>