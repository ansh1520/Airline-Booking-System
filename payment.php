<?php include 'database.php';?>
<!doctype html>                                
<html>
 <head>
   
  <title> PAYMENT PAGE </title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css"> 
  
</head>
<body>
  <center>
  <?php 
  session_start();
  ?>
    
  <div id="header">
  <h1 style="font-family:verdana color:blue  text-align:centre font-size:160%">   MAKE YOUR PAYMENT    </h1>   
   <br> 
    </div>
    <form  method="POST" action="paymentprocess.php">
    
  <table>
      <p><b>Choose Payment Option</b></p>
      
      <div id="navbar">
       
      
        <tr>
          
          <td> <input type="radio" name="card" value="Debit_card">Debit card</td>
          <td> <input type="radio" name="card" value="Credit_card">Credit card</td>
        </tr>
      

        <tr>
          
          <td><b>Enter your card number:</b></td>
          <td><input type="text" name="cardno" placeholder="CARDNO" required=""></td>
        </tr>

        <tr>
         
          <td><b> <br>Month:</b></td>
          <td><input type="number" name="month" placeholder="MONTH"  min="01" max="12" required></td>
          <td><b>Year:</b></td>
          <td><input type="number" name="year" placeholder="YEAR" min="01" max="99" required></td>
        </tr>

         <tr>
          
          <td><b><br>CVV:</b></td>
          <td><input type="password" name="cvv" placeholder="CVV" required></td>
         
        </tr>

      </div>
    </table>
     <b> <input type="submit" name="proceedpay" value="GET SET GO"></b>
  </form>
</center>
         
</body>
</html>