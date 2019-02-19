<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="register.css"> 
    <link href="bootstrap.min.css" rel="styleheet" type="text/css">
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>ENTER THE FLIGHT DETAILS!!!</h1>
    <form class="form" action="process.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Flight_id" name="Flight_id" required />
      <input type="text" placeholder="Airlines" name="Airlines" required />
      <input type="time" placeholder="Start_time" name="Start_time" required />
      <input type="time" placeholder="End_time" name="End_time" required />
      <input type="date" placeholder="Departure_date" name="Departure_date" required />
      <input type="number" placeholder="Price" name="Price" required />
      <input type="text" placeholder="Origin" name="Origin" required />
      <input type="text" placeholder="Destination" name="Destination" required />
      <input type="submit" value="Submit" name="Submit" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
    </body>

</html>
