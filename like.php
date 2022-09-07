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

        $query = "UPDATE posts set likepost=1 WHERE id=$id and likepost=0 ";
        $result = mysqli_query($conn, $query);
    }
    if (isset($_POST[$c])) {
        header('location: ../index.php');
        $query = "UPDATE posts set likepost=0 WHERE id=$id and likepost=1";
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

like(1, 'btn', 'btn1');
like(2, 'btn2', 'btn3');
like(3, 'btn4', 'btn5');
like(4, 'btn6', 'btn7');
like(5, 'btn8', 'btn9');
like(6, 'btn10', 'btn11');
like(7, 'btn12', 'btn13');
like(8, 'btn14', 'btn15');
like(9, 'btn16', 'btn17');
