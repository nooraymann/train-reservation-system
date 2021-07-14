<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "meaw";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');
    $to =  $_SESSION['session_email']; 
    $ID=$_SESSION['Session_trip'];
    $queryy="SELECT price FROM trip where trip_ID=$ID";
    if($price=mysqli_query($conn,$queryy))
    {
    if($rowss=mysqli_fetch_assoc($price))
    {
$trip_price=$rowss['price'];
    }
    }
    else{echo "Error: " . $insertid . "<br>" . mysqli_error($conn);}
    $txt = '<html>
              <head><title>Confirmation</title></head>
              <body>
                <h2>Thanks for using our website!</h2> 
                <p>The Total cost of your trip is <?php echo $trip_price;?>
                <p>Have a nice trip! please send us feedback.</p>
              </body>
          </html>';
    $subject = "Your trip is ready";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = "From: fatma.baraka67@gmail.com";
   
   if( mail($to,$subject,$txt, implode("\r\n", $headers) )){
   
    $ID=$_SESSION['Session_trip'];
    $customer=$_SESSION['session_ID'];
    $insertid="UPDATE `users`  
    SET `trip_ID`= '$ID'
     WHERE `user_ID`='$customer'";
    if(mysqli_query($conn,$insertid))
    {
      header("Location: Customer/customer page.php?mailsuccess");
    }
    else {echo "Error: " . $insertid . "<br>" . mysqli_error($conn);}
   
}
    else { header("Location: Customer/customer page.php?mailfailled");}
?>
