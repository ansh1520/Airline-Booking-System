<?php include 'database.php';?>
 <?php
 session_start();
 if(isset($_POST['proceedpay'])){

        $type=mysqli_real_escape_string($con,$_POST['card']);
        $cardno=mysqli_real_escape_string($con,$_POST['cardno']);
        $month=mysqli_real_escape_string($con,$_POST['month']);
        $year=mysqli_real_escape_string($con,$_POST['year']);
        $cvv=mysqli_real_escape_string($con,$_POST['cvv']);

        $sql="INSERT INTO `payment`(`Type`,`Card_no`,`Month`,`Year`,`Cvv`)VALUES('$type','$cardno','$month','$year','$cvv')";
        
        $result=mysqli_query($con,$sql);
        
        if($result){
          echo "inserted";
          header("location: ticket.php");
          }
      }
    else
        {
            echo "TRY AGAIN!!!";
          //  header("location:register.php");
        }              
?>