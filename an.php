-<?php include 'database.php';?>
	<?php
   session_start();
   if (isset($_POST['login'])) {
      $user=mysqli_real_escape_string($con,$_POST['user']);
      $pass=mysqli_real_escape_string($con,$_POST['password']);
      echo $pass;
      $sql="SELECT pass from login where user='$user'";
      $url="./airline.php";
      $result=mysqli_query($con,$sql);
      print_r($result);
      $row=mysqli_fetch_assoc($result);
      print_r($row);
      
      if($row['pass']==$pass){
         echo "Working";
         $_SESSION["name"]=$user;
         header("location:".$url);
      }
   }
   if (isset($_POST['search']))
   {
   $con=mysqli_connect('127.0.0.1','root','','log');

   if(!$con){
   echo'not connected to server';
   }

   if(!mysqli_select_db($con,'log'))
   {
	   echo 'database not selected';
   }

   $to_city = $_POST ['to_city'];
   $from_city = $_POST ['from_city'];
   $day = $_POST ['day'];
   $adult=$_POST ['adult'];
   $children=$_POST ['children'];
   $infant=$_POST ['infant'];
   $class=$_POST ['class'];

   
        $sql="INSERT INTO trip (To_city,From_city,Travel_class,Departure,Trip_id,Adult,Children,Infants,flight_id) VALUES ('$to_city','$from_city','$class','$day','','$adult','$children','$infant','6E-146')";
      

   if(mysqli_query($con,$sql))
   {
   	  
	  header("refresh:2; url=flight.php");
   }
   else{

	   echo ' not valid';
   }
}

  


   session_start();
   if (isset($_POST['login'])) {
      $user=mysqli_real_escape_string($con,$_POST['user']);
      $pass=mysqli_real_escape_string($con,$_POST['password']);
      echo $pass;
      $sql="SELECT pass from login where user='$user'";
      $url="./airline.php";
      $result=mysqli_query($con,$sql);
      print_r($result);
      $row=mysqli_fetch_assoc($result);
      print_r($row);
      
      if($row['pass']==$pass){
         echo "Working";
         $_SESSION["name"]=$user;
         header("location:".$url);
      }
   }
   if (isset($_POST['search']))
   {
   $con=mysqli_connect('127.0.0.1','root','','log');

   if(!$con){
   echo'not connected to server';
   }

   if(!mysqli_select_db($con,'log'))
   {
      echo 'database not selected';
   }

   $to_city = $_POST ['to_city'];
   $from_city = $_POST ['from_city'];
   $day = $_POST ['day'];
   $adult=$_POST ['adult'];
   $children=$_POST ['children'];
   $infant=$_POST ['infant'];
   $class=$_POST ['class'];

   
        $sql="INSERT INTO trip (To_city,From_city,Travel_class,Departure,Trip_id,Adult,Children,Infants,flight_id) VALUES ('$to_city','$from_city','$class','$day','','$adult','$children','$infant','6E-146')";
      

   if(mysqli_query($con,$sql))
   {
        
     header("refresh:2; url=flight.php");
   }
   else{

      echo ' not valid';
   }
}

  

?>
