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
    <link rel="stylesheet" href="css/show_product.css">
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
<?php 
include('connect.php');

$sql = "SELECT * FROM goods WHERE id = '{$_GET['id']}'";
$result = $conn->query($sql);


?>

<!-- ส่วน header มี ในส่วของ logo ทั้งหมด -->
<header>
    <div class="d-flex bd-highlight">
        <div class="p-2  bd-highlight item_header "><a href="index.php"><img src="img/logo.png" style="width: 250px;" alt="..."></a></div>
        <div class="p-4 flex-grow-1 bd-highlight item_header"><a href="index.php"><i class="fas fa-home"></i> หน้าหลัก</a></div>
     
        <div class="p-4 bd-highlight item_header"><a href="register_form.php">สมัครใหม่</a></div>
        <div class="p-4 bd-highlight item_header"><a href="login_form.php">เข้าสู่ระบบ</a></div>
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
        <div class="p-2 flex-grow-1 bd-highlight ">
             <div class="img-resize ">
                <img src="img/<?php echo $row["image"];?>"  style="width: 18rem; height: 18rem; border: 1px;" alt="...">
            </div>
        </div>
      </div>

        <div class="p-2  bd-highlight flex_main">
         <div class="shipment">
         <h2> <?php echo $row["name"];?> </h2>
         <h4> ราคา <?php echo $row["price"];?> บาท </h4>
         <form action="">
          <div class="mb-3 ">
          
            <select class="form-select" aria-label="Default select example">
              <option selected>การจัดส่ง</option>
              <option value="1">แบบปกติ</option>
              <option value="2">แบบด่วน</option>
          </select>

          </div>
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">จำนวน</label>
            </div>
            <div class="col-auto">
              <input type="text" id="number" class="form-control"  >
              <span id="passwordHelpInline" class="form-text">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
               เช่น 1 ถึง 2 ชิ้น
              </span>
            </div>
           <div class="d-grid gap-2 d-md-block">
              <a href="register_form.php"><button class="btn btn-success" type="button">เพิ่มลงตะกร้า</button></a>
           </div>
        </form>
        </div> 
     </div>

 
  </div>
  </div>
 <!-- main ที่สอง -->
 <div class="d-flex  p-2 bd-highlight  card_main2  ">
  <div class="d-flex flex-row align-items-start mb-3 "> 
    <div class="d-flex align-items-center">
  
   </div>

   <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
   <div class="p-2 bd-highlight"><h3>ผู้ขาย </h3></div>
  </div>
  
 </div>
</div>
<!-- main ที่สาม -->
<div class="card main_3">
  <div class="card-body">
    <p>รายละเอียดสินค้า</p>
     <p> <?php echo $row["detail"];?></p>
  </div>
</div>


</div>
<!-- ส่วน footer -->
<?php 
}
?>
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
