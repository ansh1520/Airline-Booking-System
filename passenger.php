<?php include 'database.php';?>
<!doctype html>                                
<html>
 <head>
   
  <title> PASSENGER FORM </title>
   <link rel="stylesheet" type="text/css" href="stylesheet.css">  
  
</head>
<body>
  <?php 
  session_start();
 ?>
    
  <div id="header">
  <h1 style="font-family:verdana color:blue  text-align:centre font-size:160%">   ENTER YOUR DETAILS !!!    </h1>   
   <br> 
    </div> 

 <form  method="POST" action="passengerprocess.php" >
    
  <table>
      
      
      <div id="navbar">
      
        
         <tr>
          
          <td><b>Title:</b></td>
          <td>
          <select name="title" required>
              <option value = "MR.">MR.</option>
              <option value = "MRS.">MRS.</option>
              <option value = "Miss">Miss</option>
            </select>
          </td>
                      
         </tr>

         <tr>
          
          <td><b>Fname:</b></td>
          <td><input type="text" placeholder="Fname" name="fname" required></td>
          
         </tr>

         <tr>
          
          <td><b>Lname:</b></td>
          <td><input type="text" placeholder="Lname" name="lname"></td>
          
         </tr>

         <tr>
          
          <td><b>Aadhar_no:</b></td>
          <td><input type="text" placeholder="Aadhar_no" name="aadhar_no" required></td>
          
         </tr>

         <tr>
          
          <td><b>Email:</b></td>
          <td><input type="email" placeholder="Email id" name="email" required></td>
          
         </tr>

         <tr>
          
          <td><b>Phone:</b></td>
          <td><input type="number" placeholder="Phone no" name="phno" required></td>
          
         </tr>
        </div>
    </table>
        <b> <input type="submit" name="PAYMENT" value="MAKE YOUR PAYMENT" ></b>
</form>
</body>
</html>
