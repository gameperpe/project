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
    <link rel="stylesheet" href="css/index.css">
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

$sql = "SELECT * FROM goods ";


if(isset ($_GET['serach_click'])){
  $sql = "SELECT * FROM goods WHERE id LIKE '%{$_GET['search']}%' OR name LIKE '%{$_GET['search']}%' ";// LIKE การหาทุกตัว

  
}
$result = $conn->query($sql);


?>
   <div class="d-flex bd-highlight">
        <div class="p-2  bd-highlight item_header "><a href="index.php"><img src="img/logo.png" style="width: 250px;" alt="..."></a></div>
        <div class="p-4 flex-grow-1 bd-highlight item_header"><a href="index.php"><i class="fas fa-home"></i> หน้าหลัก</a></div>
        <div class="p-4 bd-highlight item_header"><a href="register_form.php">สมัครใหม่</a></div>
        <div class="p-4 bd-highlight item_header"><a href="login_form.php">เข้าสู่ระบบ</a></div>
      </div>
        <!-- ส่วนของการค้นหา -->
        <form action="" method="get" >
    <div class="d-flex  flex-column  p-2 bd-highlight justify-content-center card_main  ">
      <div class="d-flex  justify-content-center "  style="margin-top: 1%;"> 
 
          <input class="form-control me-2 " type="search" name="search"   id="search"  placeholder="ค้นหาสินค้าภายในเว็บไซต์" aria-label="Search" style="width: 950px;"> 
          
          <button type="submit" class="input-group-text search" name="serach_click">ค้นหา</button>
      </div>
      </form>
      <br>
      <!-- ส่วนของหมวดหมู่ -->
  <h3 style="text-align:center">หมวดหมู่</h3>
  <div class="d-flex justify-content-center" >
    <div class="d-flex align-items-center justify-content-center" style="width: 600px; background-color: rgb(247, 90, 90);">

      <div class="p-2 bd-highlight">
        <div class="img-resize-category ">
          <a href="shoes.php"> <img src="category_img/long.png" class="card-img-top" style="width: 5rem; height: 5rem;" alt="..."></a>
        </div>
    </div>
    <div class="p-2 bd-highlight">
      <div class="img-resize-category ">
        <a href="clothing.php"> <img src="category_img/sh.png" class="card-img-top" style="width: 5rem; height: 5rem;" alt="..."></a>
      </div>
    </div>
    <div class="p-2 bd-highlight"> 
      <div class="img-resize-category ">
        <a href="phone.php"><img src="category_img/telephone.png" class="card-img-top" style="width: 5rem; height: 5rem;" alt="..."></a>
      </div>
    </div>
   
    <div class="p-2 bd-highlight"> 
      <div class="img-resize-category ">
        <a href="electrical_appliances.php"><img src="category_img/pid.png" class="card-img-top" style="width: 5rem; height: 5rem;" alt="..."></a>
      </div>
    </div>
    
    <div class="p-2 bd-highlight"> 
      <div class="img-resize-category ">
        <a href="computer.php"><img src="category_img/com.png" class="card-img-top" style="width: 5rem; height: 5rem;" alt="..."></a>
      </div>
    </div>

     <div class="p-2 bd-highlight"> 
      <div class="img-resize-category ">
        <a href="echildren_toys.php"><img src="category_img/play.png" class="card-img-top" style="width: 5rem; height: 5rem;" alt="..."></a>
      </div>
    </div>
    
    </div>
</div>
      
<!-- ส่วนแสดง FALSH SALE -->


      </div>
    </div>
     


  <br>
  <p style="text-align:center">แสดงรายการสินค้า</p>
  
<!-- ส่วนแสดงสินค้า -->
<br>

<div class="container col-12 ">
  <div class="d-flex flex-row row row-cols-auto bd-highlight justify-content-center mb-3 body_row" >
  <?php 
   while($row = mysqli_fetch_array($result)) {
  ?>
  <div class="p-2 bd-highlight    ">
        <div class="card border-secondary " >
         <div class="img-resize ">
          <a href="show_product_form.php?id=<?php echo $row['id'];?>"><img src="img/<?php echo $row["image"];?>" class="card-img-top" style="width: 20rem; height: 20rem;" alt="..."></a>
        
        </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["name"];?></h5>
            <p class="card-text cut-text">ราคา <?php echo $row["price"];?> บาท</p>
          </div>
          <div class="card-footer bg-transparent border-secondary d-flex justify-content-center">
            <div class="d-grid gap-2 d-md-block  ">
              <a href="show_product_form.php?id=<?php echo $row['id'];?>"><button class="btn btn-outline-primary " type="button">ดูรายละเอียดสินค้า</button></a>
             <a href="register_form.php"> <button class="btn btn-outline-primary" type="button">เพิ่มลงตะกร้า</button></a>
            </div>
          </div>
          </div>
          </div>
   <?php }?>
  </div>
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