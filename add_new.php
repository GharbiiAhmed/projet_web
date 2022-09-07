<?php

include("connection.php");



$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$user_type = $_POST['user_type'];





$error = array();

if (empty($id)) {
   $error['s'] = "Enter id";
} else if (empty($name)) {
   $error['s'] = "Enter name";
} else if (empty($email)) {
   $error['s'] = "Enter email";
} else if (empty($password)) {
   $error['s'] = "Enter password";
} else if (empty($user_type)) {
   $error['s'] = "Select user_type";
} else if (strlen($id) < 0) {
   $error['s'] = "Invaild id";
} else if (strlen($name) < 2) {
   $error['s'] = "Invaild name";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $error['s'] = "Invaild Email";
} else if (strlen($password) < 2) {
   $error['s'] = "password is too short";
}




if (isset($error['s'])) {
   echo "<h6 class='alert alert-danger text-center'>" . $error['s'] . "</h6>";
} else {
   echo "";
}


if (count($error) == 0) {
   $query = "INSERT INTO user_form(id,name,email,password,user_type) VALUES('$id','$name','$email','$password','$user_type')";

   $res = mysqli_query($connect, $query);

   if ($res) {
      echo "<h6 class='alert alert-success text-center'>You have successfully added new useer</h6>";
   } else {
      echo "<h4 class='alert alert-danger text-center'>Failed to INsert Data</h4>";
   }
}
