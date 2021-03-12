<?php
    include('connect.php');
  

    $sql=  "UPDATE   register SET  firstname ='{$_POST['firstname']}',
    email = '{$_POST['email']}',
    password = '{$_POST['password']}',
    sex = '{$_POST['sex']}' 
    WHERE id ='{$_GET['id']}' " ;

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
  }
   ?>
