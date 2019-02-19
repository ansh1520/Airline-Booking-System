<?php
session_start();
 include 'database.php';
?>
<!doctype html>                                
<html>
 <head>
   
  <title> TICKET </title>
   <link rel="stylesheet" type="text/css" href="stylesheet.css">  
  
</head>
<body>
  <body>
<table width:"600" border="1"  cellpadding="1"  cellspacing="1">
   
 
<?php

//$title=$_SESSION['title'];
//$lname=$_SESSION['lname'];
echo "THANK YOU!! ";
echo $_SESSION["fname"];

echo $_SESSION["lname"];
echo " YOU HAVE SUCESSFULLY BOOKED YOUR TICKET.";

//echo "$lname";
//$aadharno=$_SESSION['aadhar_no'];
//if(isset($_POST))
// $sql1="SELECT Title,Fname,Lname FROM passenger where `Fname`=$fname AND `Lname`=$lname ";
 //$result1=mysqli_query($con,$sql1);
 //$result1=$con->query($sql1);
 //echo"$result1";
// $sql2="SELECT * FROM  `flight`";
 //$result=mysqli_query($con,$sql1);
 // print_r($result1);
 //echo "<form method='POST' action='passengerprocess.php'>";
 //if($result1->num_rows > 0){
   //while($passenger=$result1->fetch_assoc()){
    //echo "<tr>";
    //echo "<td>".$passenger['Title']."</td>";
    //echo "<td>".$passenger['Fname']."</td>";
    //echo "<td>".$passenger['Lname']."</td>";
   
 //   echo  "<td><input type='submit' name=".$flight['Flight_id']." value='Book'</td>";
    //echo "<tr>";

   //}
//}else
//}
   echo "</form>";

$con->close();
  ?>

</table>

</body>
</html>