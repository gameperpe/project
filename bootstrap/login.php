<?php 
session_start();
        if(isset($_POST['summit'])){
				//connection
                  include("connect.php");
				//รับค่า user & password
                  $email = $_POST['email'];
                  $password = ($_POST['password']);
				//query 
                  $sql="SELECT * FROM register Where email='".$email."' and password='".$password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["id"] = $row["id"];
                      $_SESSION["email"] = $row["email"];
                      $_SESSION["User"] = $row["firstname"];
                      $_SESSION["User1"] = $row["firstname"]." ".$row["lastname"];
                     
                 


                      if ($_SESSION["email"] = $email){ 

                        Header("Location: index_user.php");

                      }

                  }

                  else
                  {
                    echo "<script>";
                        echo "alert(\" email หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login_form.php"); //user & password incorrect back to login again

        }
?>