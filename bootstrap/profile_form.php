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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- ส่วน header มี ในส่วของ logo ทั้งหมด -->
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

  <div class="d-flex  flex-lg-column justify-content-center  card_body  "  style=" margin-left: 15%">สวัสดีคุณ <?php print_r( $_SESSION["User1"]);?>

</div>
</div>
ิิิ<br>

<!-- ส่วนข้อมูลผู้ใช้ -->

<div class="container">
<div class="card  " style="background-color: #ff6666;" >
    <div class="card-body">
        <div class="d-flex bd-highlight">
            <div class="p-2 w-25 bd-highlight">
                <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                    <div class="mb-2 p-2 bd-highlight">บัญชีของฉัน</div>
                   <div class="mb-2 p-2 bd-highlight "><a href="basket.php" style="color: black; text-decoration: none;" >ตะกล้าของฉัน</a></div>
                   <div class="mb-2 p-2 bd-highlight"><a href="shipment.php" style="color: black; text-decoration: none;" >การซื้อของฉัน</a></div>
                    <div class="mb-2 p-2 bd-highlight"><a href="sell_product.php" style="color: black; text-decoration: none;" >ขายสินค้า</a></div>
                  </div>
            </div>
            <div class="p-2 bd-highlight">
                <div class="p-2 flex-fill bd-highlight d-flex align-items-center " >
                    <div class="card" style="width: 40rem; background-color:  #ff8080;">
                        <div class="card-body ">
     
                          
                            <h2 style="text-align: left;">บัญชีของฉัน</h2>
 <?php 
    
    include('connect.php');
    $sql = "SELECT * FROM register WHERE firstname ='{$_SESSION["User"]}' ";
    $result1 = $conn->query($sql);//ดึงข้อมูล
 ?>
                  
                    <h2 style="text-align: center;">แก้ไขโปรไฟล์</h2>
<?php 
 while($row = mysqli_fetch_array($result1)) {
     echo $row["firstname"];
     echo $row["lastname"];
?>
                    <form action="update_profile.php?id=<?php echo $row['id'];?>" method="POST">  
                      <div class="d-flex bd-highlight">
                            <div class="p-2 flex-fill bd-highlight">
                                <input class="form-control" type="text" value="<?php echo $row["firstname"]?>" aria-label="default input example" id ="firstname" name="firstname" required/>
                            </div>
                            <div class="p-2 flex-fill bd-highlight">
                                <input class="form-control" type="text" value="<?php echo $row["lastname"]?>" aria-label="Disabled input example" disabled>
                             
                            </div>
                    </div>

                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">
                            <input class="form-control" type="email" value="<?php echo $row["email"]?>" aria-label="default input example"  id ="email" name="email" required/>
                        </div>
                    </div>
                    <script>
                    $(document).ready(function(){
                        $('#password,#re_password').on('keyup',function(){
                        if($('#password').val()==$('#re_password').val()){
                            $('#message').html('รหัสผ่านตรงกันแล้วว!!!').css('color','#00ff00');
                        }
                        else{
                            $('#message').html('รหัสผ่านไม่ตรงกัน!!!').css('color','#ff0000');
                        }
                        });
                    });
                    </script>

                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">
                            <input class="form-control" type="password" placeholder="รหัสผ่าน" aria-label="default input example"  id ="password" name="password" required/>
                        </div>
                    </div>

                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">
                            <input class="form-control" type="password" placeholder="ยืนยันรหัสผ่าน" aria-label="default input example"  id ="re_password" name="re_password" required/>
                            <span id="message" ></span>
                        </div>
                    </div>
        
       
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">เพศ</div>
                    </div>

                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="female" name="sex" id="sex" required>
                                <label class="form-check-label" for="flexCheckDefault" >
                                  เพศหญิง
                                </label>
                              </div>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="male" name="sex" id="sex" required>
                                <label class="form-check-label" for="flexCheckDefault" >
                                  เพศชาย
                                </label>
                              </div>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="thirdgender" name="sex" id="sex" required>
                                <label class="form-check-label" for="flexCheckDefault" >
                                  เพศที่สาม
                                </label>
                              </div>
                        </div>

                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">
                            <button class="btn btn-success" type="submit" id="sumbit" name="sumbit" >แก้ไขข้อมูลส่วนตัว</button>
                            
                            <a href="index.php"><button class="btn btn-warning" type="button">กลับหน้าหลัก</button></a>
                        </div>
                    </div>
                    
                </form>
                <?php 
 }
                ?>
                        </div>
                      </div>
                 </div>
             </div>
            </div>
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
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="registe.js"></script>
</body>
</html>