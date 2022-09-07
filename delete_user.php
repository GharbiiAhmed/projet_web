<?php 

  include("connection.php");


  $id = $_POST['id'];

  $query = "DELETE FROM user_form WHERE id='".$id."'";


  $res = mysqli_query($connect,$query);
