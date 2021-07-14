<!DOCTYPE html>
<html>
<head>
  <meta href="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="Customer trip.css">

</head>
<body>
  <div class="Nav">
      <ul>
         <li><a href="Admin/index.php">Train Booking</a></li>
         <?php 
session_start();
?>
         <li><a href="#">Welcome <?php echo $_SESSION['session_fname'];?></a></li>
      </ul>

  </div>
<?php

  $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "meaw";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');
 
    $query="SELECT * from trip ";
    if ($result=mysqli_query($conn, $query)){ 
    while ($row=mysqli_fetch_assoc($result)){
  
     ?>
     <div class='T2'>
      <br>
      <br>
      <P class='Pargraph'>
        <br>
        ID: <?php echo $row['trip_ID']?>
        <br>
      Date: <?php echo $row['date_']?>
        <br>
        Time: <?php echo $row['time_']?>
        <br>
        Station: <?php echo $row['station']?>
        <br>
        Destination :<?php echo $row['destination']?>
        <br>
        Class: <?php echo $row['class'] ?>
        <br>
        Price: <?php echo $row['price'] ?>
        <br>
    </div>
<?php
   }
    $num=mysqli_num_rows($result);
    if($num==0)
    {
      echo"
      <center><h1 > There is no trips in the System </h1></center>
    ";

    }
    }
   
mysqli_close($conn);
?>
</body>
</html>
