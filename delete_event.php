<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}


$id = $_GET["Del"];
//$id = $_POST['id'];

$query = "DELETE FROM event WHERE id='" . $id . "'";


$res = mysqli_query($connect, $query);
