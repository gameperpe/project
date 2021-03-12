<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- เรียกใช้ css และ js ของ bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <!-- เรียกใช้ css ไฟล์ index.css -->
    <link rel="stylesheet" href="css/user_seller.css">
    <!-- fonts th -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@300;400&display=swap" rel="stylesheet">
    <!-- fonts en -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<!-- ส่วน header มี ในส่วของ logo ทั้งหมด -->
<?php 
   include('connect.php');
   if(isset($_POST["submit"])){
   

    $ext = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
    $new_imge_name = 'img_'.uniqid().".".$ext;
    $img_path = "img/";
    $upload_path =  $img_path.$new_imge_name;
     move_uploaded_file($_FILES['image']['tmp_name'],$upload_path); 

    $image = $new_imge_name;

    $query =  "INSERT INTO goods (name, price, category, detail, image, user,qrcode) VALUES
              ('{$_POST["name"]}', '{$_POST["price"]}', '{$_POST["category"]}', '{$_POST["detail"]}', '$image','{$_SESSION["User"]}','{$_POST["qrcode"]}')";
    $result = mysqli_query($conn, $query);
    
    if ($result == TRUE) {
        echo '  <div class="alert alert-success alert-dismissible fade show " role="alert">
        <strong>WOW! </strong> คุณได้เพิ่มสินค้าเรียบร้อย.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } 

    
}
$sql = "SELECT * FROM goods WHERE user ='{$_SESSION["User"]}' ";
$result1 = $conn->query($sql);//ดึงข้อมูล


?>

<header>
  <div class="d-flex bd-highlight">
    <div class="p-2  bd-highlight"><a href="index_user.php"><img src="img/logo.png" style="width: 250px;" alt="..."></a></div>
    <div class="p-4 flex-grow-1 bd-highlight item_header"><a href="index_user.php"><i class="fas fa-home"></i> หน้าหลัก</a></div>
  
   
    <div class="p-3 bd-highlight">
      <div class="btn">
        <div class="item_header_main"><a href="user_seller_form.php"><i class="fas fa-user"></i> <?php print_r( $_SESSION["User"]);?></a></div>
      </div>
      <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="visually-hidden">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item " href="profile_form.php">แก้ไขโปรไฟล์</a></li>
        <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
      </ul>
    </div></div>
  </div>
</header>

<!-- ส่วนของโชว์ข้อมูลผู้ใช้ -->
<div class="d-flex p-2 bd-highlight card_main">
  
  <div class="d-flex  flex-lg-column justify-content-center  card_body  " style=" margin-left: 15%">สวัสดีคุณ <?php print_r( $_SESSION["User1"]);?>

</div>
</div>
<!-- ส่วน card 2 อันตรงกลาง -->
<div class="container">
 <div class="row justify-content-center card_static">
  <div class="col-4 ">
    <div class="card card_static_body">
      <div class="card-body text-center ">
        สถิติ
      </div>
    </div>
  </div>

  <div class="col-4">
    <div class="card card_static_body" style="height: 33rem;">
      <div class="card-body text-center ">
        เพิ่มรายการสินค้า

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
        
            <input type="text" class="form-control" id="name" name ="name" placeholder="ชื่อสินนค้า">
           
          </div>
          <div class="mb-3">
          
            <input type="text" class="form-control" id="price" name="price" placeholder="ราคาสินค้า / บาท">
          </div>
          <div class="mb-3 ">
            <select class="form-select" aria-label="Default select example" id="category" name="category">
              <option selected>หมวดหมู่</option>
              <option value="shoes">รองเท้า</option>
              <option value="clothing">เสื้อผ้า</option>
              <option value="children_toys">ของเล่นเด็ก</option>
              <option value="phone">โทรศัพท์</option>
              <option value="computer">คอมพิวเตอร์</option>
              <option value="electrical_appliances">เครื่องใช้ไฟฟ้า</option>
            </select>
          </div>
          <div class="mb-3 ">
            <div class="form-floating">
              <textarea  placeholder="กรุณาใส่รายละเอียดสินค้า" id="detail" name="detail"></textarea>
           </div>
          </div>
         
          <div class="mb-3">
            <label for="image" class="form-label" >กรุณาใส่ไฟล์รูปภาพ</label>
            <input class="form-control" type="file" id="image"   name="image">
          </div>
         
          <div class="mb-3">
          <input type="text" class="form-control" id="qrcode" name ="qrcode" placeholder="เลขบัญชีPromptpay ">
          </div>

          <button type="submit" id="submit" name= "submit" class="btn btn-primary">ยืนยันการเพิ่มรายการสินค้า</button>
        </form>

      </div>
    </div>
  </div>

</div>
</div>

<!-- ส่วนแสดงสินค้า -->
<br>
<br>
<br>
    


<div class="container col-12 ">
<div class="d-flex flex-row row row-cols-auto bd-highlight justify-content-center mb-3 body_row" >
<?php 
 while($row = mysqli_fetch_array($result1)) {
?>
<div class="p-2 bd-highlight    ">
      <div class="card border-secondary " >
       <div class="img-resize ">
        <a href="show_product_admin_form.php?id=<?php echo $row['id'];?>"><img src="img/<?php echo $row["image"];?>" class="card-img-top" style="width: 20rem; height: 20rem;" alt="..."></a>
      
      </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["name"];?></h5>
          <p class="card-text cut-text"><?php echo $row["price"];?></p>
        </div>
        <div class="card-footer bg-transparent border-secondary d-flex justify-content-center">
          <div class="d-grid gap-2 d-md-block  ">
            <a href="update_seller_form.php?id=<?php echo $row['id'];?>"><button class="btn btn-warning " type="button">แก้ไขรายละเอียด</button></a>
            <a href="delete.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger" type="button">ยกเลิกรายการสินค้า</button></a>
          </div>
        </div>
        </div>
        </div>
 <?php }?>
</div>
</div>
<!-- ปิดส่วนสินค้า -->

<!-- ส่วน footer -->
<hr>
<div class="card ">
  <div class="card-bod ">
    <br>
    <p style="text-align:center">ข้อมูลผู้พัฒนาเว็บ</p>
   <table class="table table-borderless" >
      <thead style="text-align: center;">
        
        <tr>
          <th scope="col">ชื่อผู้พัฒนาเว็บไซต์</th>
          <th scope="col">มหาวิทยาลัยผู้พัฒนา</th>
          <th scope="col">เบอร์โทรติดต่อ</th>
          <th scope="col">e-mail</th>
        </tr>
      </thead>
      <tbody style="text-align: center;">
        <tr >
          <td >นายกรภัทร์ สิทธิคุณ</td>
          <td>มหาวิทยาลัยราชมงคลกรุงเทพ</td>
          <td>0640614237</td>
          <td>615021000364@mail.rmutk.ac.th</td>
        </tr>
        <tr>
          <td>นายอานน แซ่ซุน</td>
          <td>มหาวิทยาลัยราชมงคลกรุงเทพ</td>
          <td>0918239175</td>
          <td>615021000620@mail.rmutk.ac.th</td>
        </tr>
        <tr>
          <td >นางสาวสรณคมน์ โกมารทัต</td>
          <td>มหาวิทยาลัยราชมงคลกรุงเทพ</td>
          <td>0835924165</td>
          <td>615021000588@mail.rmutk.ac.th</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>