<?php
include('connect.php');

    $query = "DELETE FROM insert_basket WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($conn, $query); 
    if ($result) {
        header("Location: basket.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }


?>