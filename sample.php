
 <?php include 'database.php';?>
<!doctype html>                                
<html>
 <head>
   
  <title> CLEAR TRIP </title>
   <link rel="stylesheet" type="text/css" href="stylesheet.css">  
  
</head>
<body>
  <body>
<a href="airline.php"><-</a>
<table width:"600" border="1"  cellpadding="1"  cellspacing="1">
   
 <select>
  <tr>
 
    <th>FLIGHT_ID</th>
    <th>AIRLINES</th>
    <th>STOPS</th>
    <th>START_TIME</th>
    <th>END_TIME</th>
    <th>DURATION</th>
    <th>DATE</th> 
    <th>PRICE</th>
     <th>ORIGIN</th>
    <th>DESTINATION</th>
     
    </tr>
    </select>

   <?php
   $sql="SELECT * FROM trip,flight where origin='$origin' and destination='$destination' and Departure_date='departure_date'";
    $records=mysqli_query($con,$sql);


   while($flight=mysqli_fetch_assoc($records)){
    echo "<tr>";
    echo "<td>".$flight['Flight_id']."</td>";
    echo "<td>".$flight['Airlines']."</td>";
    echo "<td>".$flight['Stops']."</td>";
    echo "<td>".$flight['Start_time']."</td>";
    echo "<td>".$flight['End_time']."</td>";
    echo "<td>".$flight['Duration']."</td>";
    echo "<td>".$flight['Departure_date']."</td>";
    echo "<td>".$flight['Price']."</td>";
    echo "<td>".$flight['Origin']."</td>";
    echo "<td>".$flight['Destination']."</td>";
    echo "<tr>";

   }
   ?>  
</table>

</body>
</html>