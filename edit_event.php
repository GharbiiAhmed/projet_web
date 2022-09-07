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
} else {

    $id = $_POST['id'];


    $id = $_POST['id'];
    $name = $_POST['name'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $query = "UPDATE event SET id='" . $id . "' ,name= '" . $name . "' , place='" . $place . "', date='" . $date  . "' Where id='" . $id . "' ";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo ' Data Updated !';
    }
}
