<!DOCTYPE html>
<html>
<head>
  <meta href="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="Customer trip.css">
  <style> 
.TM
{ margin-top:80px;
  margin-left:310px;
  padding-top:100px;
  background-color:#0009;
  color:white;
  width:800px;
  height:300px;
  text-align: center;
 
}
.L {
color: white;
font-size:35px;
margin-left: 1050px;
position:absolute;
}
.noTrips{
  background-color: white;
  opacity: 0.6;
  color: black;
  width: 800px;
  height:300px;
  padding: 120px;
}
</style>

</head>
<body>
  <div class="Nav">
      <ul>
         <li><a href="customer/customer page.php">Train Booking</a></li>
         <?php 
session_start();
?>
         
         <li class="L"><a href="../php/logout.php">log out</a></li>
      </ul>

  </div>
<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "meaw";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');

$trip=$_SESSION['Session_trip'];
$myquery="SELECT * from trip where trip_ID='$trip' ";
if ($myresult=mysqli_query($conn, $myquery)){
while ($myrow=mysqli_fetch_assoc($myresult)){
 ?>
 <div class='T2'>
  <br>
  <br>
  <P class='Pargraph'>
  Date: <?php echo $myrow['date_']?>
    <br>
    Time: <?php echo $myrow['time_']?>
    <br>
    Station: <?php echo $myrow['station']?>
    <br>
    Destination :<?php echo $myrow['destination']?>
    <br>
    Class: <?php echo $myrow['class'] ?>
    <br>
    Price: <?php echo $myrow['price'] ?>
    <br>
  <button class='btn btn-outline-info btn-lg' name="view"> <a href = "cancel.php">cancel</button>
</div>
<?php

}
$num=mysqli_num_rows($myresult);
if($num==0)
{
  echo"
  <center><h1 class= noTrips> You didn't book any trip yet </h1></center>";
}
}
else{echo "Error: " . $myquery . "<br>" . mysqli_error($conn);}
mysqli_close($conn);


?>
</body>
</html>