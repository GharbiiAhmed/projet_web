<?php

include("connection.php");


$output = "";

$output .= "
  <button class='btn btn-warning my-1 text-white' id='pop-up'><i class='fa fa-user-plus'></i></button>
";

$output .= "
  <table class='table table-bordered table-striped'>
    <tr>
       <th>id</th>
       <th>name</th>
       <th>email</th>
       <th>password</th>
       <th>user_type</th>
       <th>Action</th>

     </tr>
";

$query = "SELECT * FROM user_form";
$res = mysqli_query($connect, $query);

if (mysqli_num_rows($res) == 0) {
  $output .= "
        <tr>
          <td colspan='7' class='text-center'>NO DATA FOUND</td>
        </tr>
        </table>
	";
} else {

  while ($row = mysqli_fetch_array($res)) {
    $output .= "
           <tr>
          <td class='text-center'>" . $row['id'] . "</td>
          <td class='text-center'>" . $row['name'] . "</td>
          <td class='text-center'>" . $row['email'] . "</td>
          <td class='text-center'>" . $row['password'] . "</td>
          <td class='text-center'>" . $row['user_type'] . "</td>
          <td>
              <button class='btn btn-info edit text-white' id='" . $row['id'] . "'><i class='fa fa-user-edit'></i></button>
              <button class='btn btn-danger delete text-white' id='" . $row['id'] . "'><i class='fa fa-trash-alt'></i></button>
          </td>
        </tr>
	";
  }
}






$output .= " 
   </tr>
  </table>
";

echo $output;
