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

$sql = "SELECT * FROM insert_basket WHERE user_sell ='{$_SESSION["User"]}' ";
$result = $conn->query($sql);//ดึงข้อมูล



?>
<header>
  <div class="d-flex bd-highlight">
    <div class="p-2  bd-highlight"><a href="index_user.php"><img src="img/logo.png" style="width: 250px;" alt="..."></a></div>
    <div class="p-4 flex-grow-1 bd-highlight item_header"><a href="index_user.php"><i class="fas fa-home"></i> หน้าหลัก</a></div>
    <div class="p-4 bd-highlight item_header"><a href=""><i class="fas fa-bell"></i> แจ้งเตือน<span> </span></a></div>
   
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
<!-- ส่วนของตะกร้า -->
ิิ<br>
<div class="container">
<div class="card r">
<div class="card-header border-danger bg-danger">
    <h1 class="text-light ">My basket</h1>
  </div>
  <div class="card-body ">
  <table class="table table-danger table-striped">
  <thead>
    <tr>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">ราคา</th>
      <th scope="col">รูปภาพ</th>
      <th scope="col">ยกเลิกรายการสินค้า</th>
      <th scope="col">เลขบัญชี</th>
      <th scope="col">แนบสลิป</th>
      <th scope="col">ชำระสินค้า</th>
    </tr>
  </thead>
<?php 
 while($row = mysqli_fetch_array($result)) {
?>
  <tbody>
    <tr>
      <th scope="row"><p class="mt-4"><?php echo $row['name'];?></p></th>
      <td><p class="mt-4"><?php echo $row['price'];?></p></td>
      <td>
      <img src="img/<?php echo $row["image"];?>" class="card-img-top " style="width: 5rem; height: 5rem;" alt="..."></a>
      </td>
      <td>
      <a href="delete_basket.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger mt-3" type="button">ยกเลิกรายการสินค้า</button></a>
      </td>
      
      <td><p class="mt-4"><?php echo $row['qrcode'];?></p></td>
      <form action="insert_qrcode.php?id=<?php echo $row['id'];?>" method="POST" >
      <td class="col-sm-3 ">
       <input type="file" class="form-control mt-3" id="exampleFormControlInput1" placeholder="แนบสลิป" name="slip">
      </td>
      
      <td>
      <button class="btn btn-danger mt-3" type="submit" name="qrcode" id="qrcode" >ยืนยันการชำระเงิน</button>
      </td>
      </form>
      </tr>
   
  </tbody>
<?php
 }
?>
</table>

  </div>
</div>
</div>


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