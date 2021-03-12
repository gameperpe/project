<?php
include('connect.php');

    $query = "DELETE FROM goods WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($conn, $query); 
    if ($result) {
        header("Location: user_seller_form.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }


?>