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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <div class="d-flex bd-highlight">
        <div class=" flex-fill bd-highlight">
            <img src="img_web/pexels-karolina-grabowska-5632361.jpg"  style="width: 501px; height: 100%;" alt="...">
        </div>

        <div class="p-2 flex-fill bd-highlight d-flex align-items-center " >
            <div class="card" style="width: 40rem; ">
                <div class="card-body ">
                <?php 
    
    include('connect.php');
  

    if(isset($_POST["sumbit"])){
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $check  = "SELECT  *  FROM register  WHERE (firstname = '$firstname') OR  (email = '$email')  ";
    
    $result1 = mysqli_query($conn,$check);
    $num_rows = mysqli_num_rows($result1);
   

     if($num_rows > 0)
    {
        echo '  <div class="alert alert-danger alert-dismissible fade show " role="alert" >
                <strong>Noo! </strong> คุณไม่สามารถสมัครสมาชิกได้เนื่องจากข้อมูลซ้ำ.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
     }
    else{
   
    $query =  "INSERT INTO register ( firstname, lastname, email, password, day ,month,year,sex)
    VALUES ( '{$_POST['firstname']}', '{$_POST['lastname']}', 
    '{$_POST['email']}', '{$_POST['password']}', '{$_POST['day']}', '{$_POST['month']}', 
    '{$_POST['year']}', '{$_POST['sex']}')";
  
    $result = mysqli_query($conn, $query); 
    if ($result == TRUE) {
        echo '  <div class="alert alert-success alert-dismissible fade show " role="alert">
        <strong>WOW! </strong> คุณได้สมัครสมาชิกเรียบร้อย.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } 
}
}

   ?>
                  
                    <h2 style="text-align: center;">สมัครสมาชิก</h2>

                    <form action="" method="POST">  
                      <div class="d-flex bd-highlight">
                            <div class="p-2 flex-fill bd-highlight">
                                <input class="form-control" type="text" placeholder="ชื่อจริง" aria-label="default input example" id ="firstname" name="firstname" required/>
                            </div>
                            <div class="p-2 flex-fill bd-highlight">
                                <input class="form-control" type="text" placeholder="นามสกุล" aria-label="default input example"  id ="lastname" name="lastname" required/>
                            </div>
                    </div>

                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">
                            <input class="form-control" type="email" placeholder="อีเมล" aria-label="default input example"  id ="email" name="email" required/>
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
                        <div class="p-2 flex-fill bd-highlight">วันเกิด</div>
                    </div>
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-fill bd-highlight">
                            <select class="form-select "  id ="day" name="day" required> 
                                <option >วันที่</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <select class="form-select" id ="month" name="month" required>
                                <option >เดือน</option>
                                <option value="1">ม.ค.</option>
                                <option value="2">ก.พ.</option>
                                <option value="3">มี.ค</option>
                                <option value="4">เม.ษ.</option>
                                <option value="5">พ.ค.</option>
                                <option value="6">มิ.ย.</option>
                                <option value="7">ก.ค.</option>
                                <option value="8">ส.ค.</option>
                                <option value="9">ก.ย.</option>
                                <option value="10">ต.ค.</option>
                                <option value="11">พ.ย.</option>
                                <option value="12">ธ.ค.</option>
                            </select>
                        </div>
                            <div class="p-2 flex-fill bd-highlight">
                                <select class="form-select" id ="year" name="year" required>
                                    <option >ปีที่เกิด</option>
                                    <option value="1905">1905</option>
                                    <option value="1906">1906</option>
                                    <option value="1907">1907</option>
                                    <option value="1908">1908</option>
                                    <option value="1909">1909</option>
                                    <option value="1910">1910</option>
                                    <option value="1911">1911</option>
                                    <option value="1912">1912</option>
                                    <option value="1913">1913</option>
                                    <option value="1914">1914</option>
                                    <option value="1915">1915</option>
                                    <option value="1916">1916</option>
                                    <option value="1917">1917</option>
                                    <option value="1918">1918</option>
                                    <option value="1919">1919</option>
                                    <option value="1920">1920</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
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
                            <button class="btn btn-success" type="submit" id="sumbit" name="sumbit" >สมัครสมาชิก</button>
                            
                            <a href="index.php"><button class="btn btn-warning" type="button">กลับหน้าหลัก</button></a>
                        </div>
                    </div>
                    
                </form>
                </div>
              </div>
         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="registe.js"></script>

</body>
</html>
<!-- Button trigger modal -->
