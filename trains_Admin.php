<!DOCTYPE html>
<html>
<head>
  <meta href="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="Customer trip.css">

</head>
<body>
  <?php 
    session_start();
  ?>
  
  <div class="Nav">
      <ul>
         <li><a href="#">Train Booking</a></li>
         <li><a href="Admin/index.php">Welcome <?php echo $_SESSION['session_fname'];?></a></li>
      </ul>

  </div>
<?php

  $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "meaw";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');
 
    $query="SELECT * from train ";
    if ($result=mysqli_query($conn, $query)){ 
    while ($row=mysqli_fetch_assoc($result)){
      
     ?>
     <div class='T2'>
      <br>
      <br>
      <P class='Pargraph'>
      ID: <?php echo $row['train_ID']?>
        <br>
        Max Capacity: <?php echo $row['maximumcapacity']?>
        <br>
        Airconditiond: <?php echo $row['Airconditioned']?>
        <br>
        Contain Beds :<?php echo $row['beds']?>
        <br>
        Class: <?php echo $row['class'] ?>
        <br>
    </div>
<?php
   }
    $num=mysqli_num_rows($result);
    if($num==0)
    {
      echo"
      <center><h1 > There is no trains in the system </h1></center>
    ";

    }


    }
   
mysqli_close($conn);
?>
</body>
</html>
