<?php

include("connection.php");

$id = $_POST['id'];

$query = "SELECT * FROM user_form WHERE id='$id'";
$res = mysqli_query($connect, $query);

$id = "id";
$name = "name";
$email = "email";
$password = "password";
$user_type = "user_type";

while ($row = mysqli_fetch_array($res)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $user_type = $row['user_type'];
}

$output = array(
    "id" => $id,
    "name" => $name,
    "email" => $email,
    "password" => $password,
    "user_type" => $user_type
);

echo json_encode($output);
