<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "db_crud";

$conn = mysqli_connect($host,$user,$pass,$banco);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>