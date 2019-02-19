<?php include 'database.php';?>
<?php
	
	session_start();
	if (isset($_POST['login'])) {
		$user=mysqli_real_escape_string($con,$_POST['user']);
		$pass=mysqli_real_escape_string($con,$_POST['password']);
	
		$sql="SELECT pass from login where user='$user'";
		$url="./airline.php";
		$result=mysqli_query($con,$sql);
		//print_r($result);
		$row=mysqli_fetch_assoc($result);
		//print_r($row);
       /* $sql23="select Passenger_id from passenger,login where passenger.Fname=login.Name and user='$user'";
        $result23=mysqli_query($con,$sql23);
        $rowUser23=mysqli_fetch_assoc($result23);
        $_SESSION['Passenger_id']=$rowUser23['Passenger_id'];*/
		
		if($row['pass']==$pass){
			echo "Working";
			$_SESSION["name"]=$user;
			header("location:".$url);
            }
      else{
         echo "INCORRECT PASSWORD!!!";
      }
	}


    if(isset($_POST['Register'])){
        $user=mysqli_real_escape_string($con,$_POST['user']);
        
        $password=mysqli_real_escape_string($con,$_POST['pass']);
        $DOB=mysqli_real_escape_string($con,$_POST['DOB']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $fname=mysqli_real_escape_string($con,$_POST['fname']);
        $lname=mysqli_real_escape_string($con,$_POST['lname']);
        $aadharno=mysqli_real_escape_string($con,$_POST['aadhar_no']);
        $phno=mysqli_real_escape_string($con,$_POST['phno']);

        $sql1="INSERT INTO `login` (`user`, `Name`, `DOB`, `Email`, `pass`) VALUES ('$user', '$fname','$DOB', '$email', '$password')";
        $result1=mysqli_query($con,$sql1);

        /*$sql23="select * from `passenger` where `Aadhar_no`='$aadharno'";
        $result23=mysqli_query($con,$sql23);
        $rowUser23=mysqli_fetch_assoc($result23);*/
        

        $sql2="INSERT INTO `passenger` (`Fname`, `Lname`, `Aadhar_no`, `Email`, `Phno`) VALUES ('$fname', '$lname','$aadharno', '$email', '$phno')";
        $result2=mysqli_query($con,$sql2);
        $sql23="select * from `passenger` where `Aadhar_no`='$aadharno'";
        $result23=mysqli_query($con,$sql23);
        $rowUser23=mysqli_fetch_assoc($result23);

        $_SESSION['Passenger_id']=$rowUser23['Passenger_id'];
        
        

        if($result1){
            header("location: index.php");
        }
        else
        {
            echo "username already exist!";
          //  header("location:register.php");
        }             
        
    }

        
   
   

if(isset($_POST['Submit'])){
        $Flight_id=mysqli_real_escape_string($con,$_POST['Flight_id']);
        $Airlines=mysqli_real_escape_string($con,$_POST['Airlines']);
        
        $Start_time=mysqli_real_escape_string($con,$_POST['Start_time']);
        $End_time=mysqli_real_escape_string($con,$_POST['End_time']);
        $Departure_date=mysqli_real_escape_string($con,$_POST['Departure_date']);
        $Price=mysqli_real_escape_string($con,$_POST['Price']);
        $Origin=mysqli_real_escape_string($con,$_POST['Origin']);
        $Destination=mysqli_real_escape_string($con,$_POST['Destination']);
        
        $sql="INSERT INTO `flight` (`Flight_id`, `Airlines`, `Start_time`, `End_time`, `Departure_date`,`Price`,`Origin`,`Destination`) VALUES ('$Flight_id', '$Airlines','$Start_time', '$End_time', '$Departure_date','$Price','$Origin','$Destination')";
        $result=mysqli_query($con,$sql);
        if($result){
            header("location: airline.php");
        }
      
    
  }
    else
        {
            echo "TRY AGAIN!!!";
          //  header("location:register.php");
        }              
        
?>
