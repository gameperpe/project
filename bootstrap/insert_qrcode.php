<?php 
   include('connect.php');
   session_start();
    $ext = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
    $new_imge_name = 'img_'.uniqid().".".$ext;
    $img_path = "img/";
    $upload_path =  $img_path.$new_imge_name;
    move_uploaded_file($_FILES['image']['tmp_name'],$upload_path); 

    $image = $new_imge_name;
    $sql = "SELECT * FROM insert_basket WHERE id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
    $id =  $row['id'];
    $name =  $row['name'];
    $price = $row['price'];
    $image = $row['image'];
    $qrcode = $row['qrcode'];
    $admin = $row['user'];
    $user = $row['user_sell'];
    $address = $row['address'];
    $delivery_style = $row['delivery_style'];
     }
    echo $id;
    echo $name;
    echo $price;
    echo $admin;
    echo $image;
    echo $address;
    echo $delivery_style;
    echo $user;
    $query =  "INSERT INTO qrcode (id, name, price,user,image,address,delivery_style,admin)
    VALUES ('{$id}','{$name}','{$price}','{$user}','{$image}','{$address}','{$delivery_style}','{$admin}') ";
  
    $result1 = mysqli_query($conn, $query); 
    
    if ($result1 == TRUE) {
        $query = "DELETE FROM insert_basket WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($conn, $query); 
        header("Location: shipment.php");
    }



?>
