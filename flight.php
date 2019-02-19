
 <?php include 'database.php';?>
<!doctype html>                                
<html>
 <head>
   
  <title> CLEAR TRIP </title>
  

   <link rel="stylesheet" type="text/css" href="stylesheet.css">  

</head>
<body>
  <body>

<table id="table" width:"600" border="1"  cellpadding="1"  cellspacing="1">
   
 <thead>
  <tr>
 
    <th>FLIGHT_ID</th>
    <th>AIRLINES</th>
    <th>START_TIME</th>
    <th>END_TIME</th>
    <th>DURATION</th>
    <th>DATE</th> 
    <th>PRICE</th>
    <th>ORIGIN</th>
    <th>DESTINATION</th>
    
     
    </tr>
  </thead> 
    <?php
   session_start();
 // $adult=$_SESSION['adult'];
  //$children=$_SESSION['children'];
  //$infant=$_SESSION['infant'];
  $fromcity=$_SESSION['from_city'];
  $tocity=$_SESSION['to_city'];
  $departure=$_SESSION['departure'];
  

   $sql="SELECT * FROM `flight` WHERE `Origin`='$fromcity' and `Destination`='$tocity' and `Departure_date`='$departure'";
    $records=mysqli_query($con,$sql);
   //create procedure paydetails(price
    //in Flight_id integer,in increases integer)
   //update flight set price*=no_of_travellers
   //WHERE `Origin`='$fromcity' and `Destination`='$tocity' and `Departure_date`='$departure'";//
    echo "<form method='POST' action='passengerprocess.php'>";
   while($flight=mysqli_fetch_assoc($records)){
    echo "<tr>";
    echo "<td>".$flight['Flight_id']."</td>";
    echo "<td>".$flight['Airlines']."</td>";
    echo "<td>".$flight['Start_time']."</td>";
    echo "<td>".$flight['End_time']."</td>";
    echo "<td>".$flight['Duration']."</td>";
    echo "<td>".$flight['Departure_date']."</td>";
    echo "<td>".$flight['Price']."</td>";
    echo "<td>".$flight['Origin']."</td>";
    echo "<td>".$flight['Destination']."</td>";
    echo  "<td><input type='submit' name=".$flight['Flight_id']." value='Book'</td>";
    echo "<tr>";

   }
        
   echo "</form>";
   ?>  
</table>

</script>

<br>
<br>
<br>
</body>
</html>