<?php

include("connection.php");

$id = $_POST['id'];


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];
$query1 = "UPDATE user_form SET id='$id', name='$name', email='$email', password='$password', user_type='$user_type'";
$res = mysqli_query($connect, $query1);

if ($res) {
   echo "<h6 class='alert alert-success text-center'>You have successfully edit useer</h6>";
} else {
   echo "<h4 class='alert alert-danger text-center'>Failed to edit Data</h4>";
}
