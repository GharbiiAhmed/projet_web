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

$id = $_POST['id'];

$query = "SELECT * FROM event WHERE id='$id'";
$res = mysqli_query($connect, $query);

$id = "";
$name = "";
$place = "";
$date = "";


while ($row = mysqli_fetch_array($res)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['place'];
    $password = $row['date'];
}

$output = array(
    "id" => $id,
    "name" => $name,
    "place" => $place,
    "date" => $date,

);

echo json_encode($output);
