<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {



    if (isset($_POST['check'])) {
        $post = $_POST['post'];
        $note = $_POST['note'];
        $sql = "INSERT into rating (nb,message) values ('$note','$post') ";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
