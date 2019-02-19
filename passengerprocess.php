<?php include 'database.php';?>
 <?php
 session_start();
 $sql="SELECT * FROM flight";
 $result=mysqli_query($con,$sql);
 while($row=$result->fetch_assoc()){

 if(isset($_POST[$row['Flight_id']])){
    echo "working with ".$row['Flight_id'];
    $_SESSION['fly']=$row['Flight_id'];
    header("location:passenger.php");
  }
}
        if(isset($_POST['PAYMENT']))
        {
        $title=mysqli_real_escape_string($con,$_POST['title']);
        $fname=mysqli_real_escape_string($con,$_POST['fname']);
        $lname=mysqli_real_escape_string($con,$_POST['lname']);
        $aadhar_no=mysqli_real_escape_string($con,$_POST['aadhar_no']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $phno=mysqli_real_escape_string($con,$_POST['phno']);
        print_r($_SESSION);
        $Flight_id=$_SESSION['fly'];
        $sql="INSERT INTO `passenger`(`Passenger_id`,`Fname`,`Lname`,`Aadhar_no`,`Email`,`Phno`,`Flight_id`)VALUES('', '$fname','$lname', '$aadhar_no','$email','$phno','$Flight_id')";


        //$sql2="select * from `passenger` where `Fname`='$fname' and `Lname`=$lname";
        //$result2=mysqli_query($con,$sql2);
        //$rowUser=mysqli_fetch_assoc($result2);

        //$_SESSION['title']=$rowUser['Title'];
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
        
        
        $result=mysqli_query($con,$sql);

        
        if($result){
         //echo "inserted";
          header("location: payment.php");
          }
      }          
?>