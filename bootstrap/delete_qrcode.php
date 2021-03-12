<?php
include('connect.php');

    $query = "DELETE FROM qrcode WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($conn, $query); 
    if ($result) {
        header("Location: sell_product.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }


?>