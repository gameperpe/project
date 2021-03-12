<?php
    include('connect.php');
    $ext = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
    $new_imge_name = 'img_'.uniqid().".".$ext;
    $img_path = "img/";
    $upload_path =  $img_path.$new_imge_name;
    move_uploaded_file($_FILES['image']['tmp_name'],$upload_path); 
    $image = $new_imge_name;
    $sql=  "UPDATE   goods SET  
    name ='{$_POST['name']}',
    price = '{$_POST['price']}',
    category = '{$_POST['category']}',
    image = '$image',
    detail = '{$_POST['detail']}' 
    WHERE id ='{$_GET['id']}' " ;

if ($conn->query($sql) === TRUE) {
    header("Location: user_seller_form.php");
  }
   ?>
