<?php
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if (!$conn) {
        # code...
        echo "Database Connected".mysqli_connect_error();
    }//else{
    //     echo "Error";
    // }
?>