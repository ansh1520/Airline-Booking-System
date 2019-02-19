<?php
    include 'database.php';
?>

<?php
    
    session_start();
    if(isset($_POST['alogin'])){
            $user=mysqli_real_escape_string($con,$_POST['user']);
            $password=mysqli_real_escape_string($con,$_POST['pass']);
            $sql="select * from admin where user='$user' and pass='$password'";
            $result=mysqli_query($con,$sql)
            or die("Failed to query database".mysql_error());
            $row =mysqli_fetch_array($result);
           //s echo($row)

            if($row['user']==$user && $row['pass']=$password){
             header("location: flight1.php");
                echo "Login Sucess!!!  welcome  " .$row['user'];
            }

            else{
                echo "Failed to Login!!!";
            }
    }

?>
















<?php
    
    if(isset($_POST['login'])){
            $user=mysqli_real_escape_string($con,$_POST['user']);
            $password=mysqli_real_escape_string($con,$_POST['pass']);
            $sql="select * from login where user='$user' and pass='$password'";
            $result=mysqli_query($con,$sql)
            or die("Failed to query database".mysql_error());
            $row =mysqli_fetch_array($result);
           //s echo($row)

            if($row['user']==$user && $row['pass']=$password){
             header("location: airline.php");
                echo "Login Sucess!!!  welcome  " .$row['Name'];
            }

            else{
                echo "Failed to Login!!!";
            }
    }

?>