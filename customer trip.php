<!DOCTYPE html>
<html>
<head>
  <meta href="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="Customer trip.css">
<style>
  .L {
color: white;
font-size:35px;
margin-left: 900px;
position:absolute;
}
  </style>
</head>
<body>
  <div class="Nav">
      <ul>
         <li><a href="#">Train Booking</a></li>
         <?php 
session_start();

?>
         <li><a href="#">Welcome <?php echo $_SESSION['session_fname'];?></a></li>
         <li class="L"><a href="php/logout.php">log out</a></li>
      </ul>

  </div>
<?php

if(isset($_POST['submit']))
{
  $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "meaw";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');
 
    $stat=$_POST['fromm'];
    $destt=$_POST['too'];
    $avail=$_POST['available_seats'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $queryt="SELECT * from trip where station='$stat'and destination='$destt' and availableseats>='$avail' and date_='$date' and time_='$time'";
    if ($resultt=mysqli_query($conn, $queryt)){ 
    while ($rowt=mysqli_fetch_assoc($resultt)){
      $_SESSION['Session_trip']=$rowt['trip_ID'];
     ?>
     <div class='T2'>
      <br>
      <br>
      <P class='Pargraph'>
      Date: <?php echo $date?>
        <br>
        Time: <?php echo $time?>
        <br>
        Station: <?php echo $stat?>
        <br>
        Destination: <?php echo $destt?>
        <br>
        Class: <?php echo $rowt['class'] ?>
        <br>
        Price: <?php echo $rowt['price'] ?>
        <br>
      <button class='btn btn-outline-info btn-lg' name="book"> <a href = "book.php">Book</button>
    </div>
<?php
   }
    $num=mysqli_num_rows($resultt);
    if($num==0)
    {
      echo"
      <div class='no'> Unfortunately there is no available trips for you </div>
    ";

    }


    }
   


}


mysqli_close($conn);
?>
</body>
</html>
