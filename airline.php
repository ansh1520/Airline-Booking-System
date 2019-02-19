<?php include 'database.php';?>
<!doctype html>                                
<html>
 <head>
   
  <title> CLEAR TRIP </title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css"> 
  
</head>
<body>
  <center>
  <?php 
  session_start();
  ?>
    
  <div id="header">
  <h1 style="font-family:verdana color:blue  text-align:centre font-size:160%">   BOOK YOUR TRIP     </h1>   
   <br> 
    </div> 

 <form  method="POST" action="tripprocess.php">
    
  <table>
      
      
      <div id="navbar">
      
      <tr>
          
          <td><b>From_city:</b></td>
          <td>
              
              <select name="from_city" required>
              <option value = "BANGALORE">BANGALORE</option>
              <option value = "KOLKATA">KOLKATA</option>
              <option value = "HYDERABAD">HYDERABAD</option>
              <option value = "DELHI">DELHI(DLH)</option>
              <option value = "GOA">GOA</option>
              <option value = "CHENNAI">CHENNAI</option>
              <option value = "PATNA">PATNA</option>
              <option value = "LUCKNOW">LUCKNOW</option>
              <option value = "COCHI">COCHI</option>
              <option value = "KOTA">KOTA</option>
              <option value = "AGRA">AGRA</option>
              <option value = "BOMBAY">BOMBAY</option>
            </select>
          </td>
          
      </tr> 
    
      <tr>
          
          <td><b>To_city:</b></td>
          <td>
              
              <select name="to_city" required >
              <option value = "BANGALORE">BANGALORE</option>
              <option value = "KOLKATA">KOLKATA</option>
              <option value = "HYDERABAD">HYDERABAD</option>
              <option value = "DELHI">DELHI</option>
              <option value = "GOA">GOA</option>
              <option value = "CHENNAI">CHENNAI</option>
              <option value = "PATNA">PATNA</option>
              <option value = "LUCKNOW">LUCKNOW</option>
              <option value = "COCHI">COCHI</option>
              <option value = "KOTA">KOTA</option>
              <option value = "AGRA">AGRA</option>
              <option value = "BOMBAY">BOMBAY</option>
            </select>
               </td>
        </tr>  
          <tr>
          
          <td><b>Departure:</b></td>
          <td><input type="date" placeholder="choose date" name="day" required></td>
          
      </tr>
      
      <tr>
         <td><b>Class:</b></td>
          <td>
              <select name="class" required>
              <option value = "Economy">Economy</option>
              <option value = "Buissness">Buissness</option>
              <option value = "First class">First class</option>
              <option value = "Premium Economy">Premium economy</option>
            </select>
          </td>
          
      </tr>
          

      <tr>
          
          <td><b>Traveller:</b></td>
          <td>
              
              Adult : <input type ="number" placeholder="12+yrs" name="adult"  min="1"  max="9" required >
              Children :  <input type ="number" placeholder="2-12yrs" name="children"   min="0"  max="9" >
              Infant :<input type ="number" placeholder="blw 2yrs" name="infant"  min="0"  max="9" >
              
          
          </td>
          
      </tr>
      </div>
      </table>
      <br>
      <br>
      <br>

       <b> <input type="submit" name="search" value="SEARCH FLIGHT"></b>

</form>
</center>
</body>
</html>