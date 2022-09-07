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


if (isset($_POST["bu"])) {

    $id = $_POST["recherche"];
    $sql = "SELECT id, name, place , date FROM event where id=$id";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . "Name: " . $row["name"] . "place " . $row["place"] . "date: " . $row["date"] . "<br>";
        }
    } else {
        echo "0 results";
    }
}
