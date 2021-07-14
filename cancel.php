<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "meaw";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');
    $to =  $_SESSION['session_email']; 
    $txt = '<html>
              <head><title>Confirmation</title></head>
              <body>
                <h2>Thanks for using our website!</h2> 
                <p> you cancelled your trip </p>
                <p> please send us feedback.</p>
              </body>
          </html>';
    $subject = "Your trip is cancelled";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = "From: fatma.baraka67@gmail.com";
   
   if( mail($to,$subject,$txt, implode("\r\n", $headers) )){
   
    $customer=$_SESSION['session_ID'];
    $insertid="UPDATE `users`  
    SET `trip_ID`= 0
     WHERE `user_ID`='$customer'";
    if(mysqli_query($conn,$insertid))
    {
        $_SESSION['Session_trip']=0;
      header("Location: Customer/customer page.php?mailsuccesscancel");
    }
    else {echo "Error: " . $insertid . "<br>" . mysqli_error($conn);}
   
}
    else { header("Location: Customer/customer page.php?mailfailledcancel");}
?>
