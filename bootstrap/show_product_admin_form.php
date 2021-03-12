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
    <link rel="stylesheet" href="css/show_product_admin.css">
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

$sql = "SELECT * FROM goods WHERE id = '{$_GET['id']}'";
$result = $conn->query($sql);

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
    <!-- ส่วนของการค้นหา -->
    <div class="d-flex p-2 bd-highlight justify-content-center card_main ">
        <div class="d-flex  align-items-start " style="margin-top: 1%;"> 
            <input class="form-control me-2 " type="search" placeholder="ค้นหาสินค้าภายในเว็บไซต์" aria-label="Search" style="width: 950px;"> 
            <a href="" class="search"><span class="input-group-text search" >ค้นหา</span></a>
        </div>
    </div>
</header>

 <!-- main โชว์รูปสินค้า แสดงรายละเอียดการจัดส่ง  -->
 <div class="container">
    <div class="d-flex bd-highlight justify-content-center flex_header  ">
<?php 
 while($row = mysqli_fetch_array($result)) {
?>
      <div class="card  " >
      <form action="insert_basket.php?id=<?php echo $row['id'];?>" method="POST">
        <div class="p-2 flex-grow-1 bd-highlight ">
             <div class="img-resize ">
                <img src="img/<?php echo $row["image"];?>"  style="width: 15rem; height: 15rem; border: 1px;" alt="...">
            </div>
        </div>
      </div>

        <div class="p-2  bd-highlight flex_main">
         <div class="shipment">
       <h2> <?php echo $row["name"];?> </h2>
       <h4> ราคา <?php echo $row["price"];?> บาท </h4>
        
          <div class="mb-3 ">
            
            <select class="form-select" aria-label="Default select example" id="delivery_style" name="delivery_style">
              <option selected>การจัดส่ง</option>
              <option value="normal">แบบปกติ</option>
              <option value="quick">แบบด่วน</option>
          </select>

          </div>
           
            <div class="form-floating" >
              <textarea  placeholder="กรุณาใส่รายที่อยู่ผู้รับสินค้า" id="address" name="address" style="width: 400px; height: 100px;"></textarea>
           </div>
          
           <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-success" type="submit">เพิ่มลงตะกร้า</button>
           </div>
       
        </div> 
        </form>
     </div>
 
  </div>
  </div>
 <!-- main ที่สอง -->
 <div class="container">
 <div class="d-flex  p-2 bd-highlight  card_main2  ">
  <div class="d-flex flex-row align-items-start mb-3 "> 

   <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
    <div class="p-2 bd-highlight"><h2>ร้านค้า <?php echo $row["user"];?> </h2></div>
   
  </div>
  
 </div>
</div>
<!-- main ที่สาม -->
<div class="card main_3">
  <div class="card-body">
    <p>รายละเอียดสินค้า</p>
  
    <p><?php echo $row["detail"];?></p>
  </div>
</div>


  <?php
} 
?>
</div>
</div>
<!-- ส่วน footer -->

<div class="card footer ">
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