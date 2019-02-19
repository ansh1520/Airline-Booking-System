 
 <?php include 'database.php';?>
 <?php
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
   session_start();
	 if (isset($_POST['search'])) {

     $to_city = $_POST ['to_city'];
     $from_city = $_POST ['from_city'];
     $day = $_POST ['day'];
     $adult=$_POST ['adult'];
     $children=$_POST ['children'];
     $infant=$_POST ['infant'];
     $class=$_POST ['class'];
     
  

        $sqlA="SELECT Flight_id FROM flight WHERE Origin='$from_city' AND Destination='$to_city' AND Departure_date='$day'";
        $result1A=mysqli_query($con,$sqlA);
        $rowFlight=mysqli_fetch_assoc($result1A);
        $FLIGHTNUM =$rowFlight["Flight_id"];

        $sqlC="SELECT Price FROM flight WHERE Origin='$from_city' AND Destination='$to_city' AND Departure_date='$day'";
        $result1C=mysqli_query($con,$sqlC);
        $rowFlightC=mysqli_fetch_assoc($result1C);
        $FLIGHTPRICE=$rowFlightC["Price"];
        
        $passengerid=$_SESSION['Passenger_id'];

        $sqlB="INSERT INTO trip VALUES (0,'$passengerid','$from_city','$to_city','$day','$class','$adult','$children','$infant','$FLIGHTNUM','$FLIGHTPRICE')";
        //$sqlE="update passenger set Flight_id='$FLIGHTNUM' where Passenger_id='passengerid'";

        $sql2="select * from `trip` where `From_city`='$from_city' and `To_city`='$to_city' and `Departure`='$day'";
        $result2=mysqli_query($con,$sql2);
        $rowUser=mysqli_fetch_assoc($result2);

        $_SESSION['from_city']=$rowUser['From_city'];
        $_SESSION['to_city']=$rowUser['To_city'];
        $_SESSION['departure']=$rowUser['Departure'];
        
   }
   if(mysqli_query($con,$sqlB))
   {
   	 //echo "query exceuted"; 
	  header("location:flight.php");
   }
   else{

	   echo 'no flight available';
   }
  
}
