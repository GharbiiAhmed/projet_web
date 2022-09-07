<?php



function like($id, $b, $c)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST[$b])) {
        header('location: ../index.php');

        $query = "UPDATE user_event set likepost=1 WHERE id=$id and likepost=0 ";
        $result = mysqli_query($conn, $query);
    }
    if (isset($_POST[$c])) {
        header('location: ../index.php');
        $query = "UPDATE user_event set likepost=0 WHERE id=$id and likepost=1";
        $result = mysqli_query($conn, $query);

        // } else {
        //     $like = 0;
        //     $query = "UPDATE posts set like='" . $like . "'";
        //     $result = mysqli_query($conn, $query);

        //     if ($result) {
        //         echo "j'aime";
        //     }
        // }
    }
}

like(1, 'btn20', 'btn21');
like(2, 'btn22', 'btn23');
like(3, 'btn24', 'btn25');
like(4, 'btn26', 'btn27');
like(5, 'btn28', 'btn29');
like(6, 'btn30', 'btn31');
