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
        <link rel="stylesheet" href="css/login_form.css">
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
    <div class="d-flex bd-highlight">
        <div class=" flex-fill bd-highlight">
            <img src="img_web/pexels-karolina-grabowska-5632361.jpg"  style="width: 501px; height: 100%;" alt="...">
        </div>

        <div class="p-2 flex-fill bd-highlight d-flex align-items-center " >
            <div class="card" style="width: 40rem; ">
                <div class="card-body ">
                    <h2 style="text-align: center;">เข้าสู่ระบบ</h2>
                    <form  action="login.php"  method="POST">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                    
                        <div class="d-grid gap-2 d-md-block  ">
                            <button class="btn btn-primary " type="submit" name="summit" id="summit">เข้าสู่ระบบ</button>
                            <a href="index.php"><button class="btn btn-primary" type="button">กลับหน้าหลัก</button></a>
                          </div>
                      </form>
                </div>
              </div>
         </div>
     </div>
</body>
</html>