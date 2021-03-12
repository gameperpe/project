<?php 
   include('connect.php');
   session_start();

    
    $sql = "SELECT * FROM goods  WHERE id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
    $id =  $row['id'];
    $name =  $row['name'];
    $price = $row['price'];
    $image = $row['image'];
    $user = $row['user'];
    $qrcode = $row['qrcode'];
     }
    $address = $_POST['address'];
    $delivery_style = $_POST['delivery_style'];
    echo $id;
    echo $name;
    echo $user;
    echo $price;
    echo $image;
    echo $address;
    echo $delivery_style;
    
    $user_sell = ( $_SESSION["User"]);
    echo $user_sell;
    $query =  "INSERT INTO insert_basket (id, name, price,image,user,qrcode,address,delivery_style,user_sell)
    VALUES ('$id','{$name}','{$price}','{$image}','{$user}','{$qrcode}','{$address}','{$delivery_style}','{$user_sell}') ";
  
    $result1 = mysqli_query($conn, $query); 
    
    if ($result1 == TRUE) {
        header("Location: basket.php");
     }



?>
