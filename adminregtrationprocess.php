<?php include 'database.php';?>

 <?php

  if (isset($_POST['alogin'])) {
    $user=mysqli_real_escape_string($con,$_POST['user']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
  
    $sql="SELECT pass from admin_login where user='$user'";
   //$url="./flight1.php";
    $result=mysqli_query($con,$sql);    
    $row=mysqli_fetch_assoc($result);
    
    if($row['pass']==$pass){
           // $_SESSION["name"]=$user;
      header("location:flight1.php");
    }
    else{
      echo "password doesn't match";
    }

?>