<?php 
   include('connect.php');
   if(isset($_POST["submit"])){
    
    $ext = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
    $new_imge_name = 'img_'.uniqid().".".$ext;
    $img_path = "img/";
    $upload_path =  $img_path.$new_imge_name;
     move_uploaded_file($_FILES['image']['tmp_name'],$upload_path); $succees = 

    $image = $new_imge_name;

    $query =  "INSERT INTO goods ( id, name, price, cateory, detail, image)
    VALUES ( '{$_POST['name']}', '{$_POST['price']}', 
    '{$_POST['cateory']}', '{$_POST['detail']}', '{$image}' ";
  
    $result = mysqli_query($conn, $query); 
    
    if ($result == TRUE) {
        echo '  <div class="alert alert-success alert-dismissible fade show " role="alert">
        <strong>WOW! </strong> คุณได้เพิ่มสินค้าเรียบร้อย.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        
    } 
}


?>
