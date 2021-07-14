

<!DOCTYPE html>
<html>
 
<head>
  <meta href="UTF-8">
  <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/Admin.css">
  <style>
   .L {
color: white;
font-size:35px;
margin-left: 450px;
position:absolute;
}

    </style>
</head>
<body>

  <div class="Nav">
      <ul>
         <li><a href="customer page.php">Train Booking</a></li>
         <?php 
 session_start();
 
 
 ?>
         <li><a href="#" style="margin:200px;">Welcome <?php echo $_SESSION['session_fname']; ?></a></li>
         <li class="L"><a href="../php/logout.php">log out</a></li>
      </ul>
  </div>
  <div class="sideNav">
<?php        // alert if the mail sent for booking
                    if(isset($_REQUEST['mailsuccess']))
                    {
                        $Message=$_REQUEST['mailsuccess'];
                        $Message="  You Booked your trip ,Plese check your mail";
                ?>
                     <div class="alert alert-success text-center"><?php echo $Message?></div>   
                <?php                            
                    }
                ?>
                <?php        
                // alert if there is an error when sendeing booking email
                    if(isset($_REQUEST['mailfailled']))
                    {
                        $Message=$_REQUEST['mailfailled'];
                        $Message=" Oops There is a problem we will solve it soon";
                ?>
                     <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                <?php                            
                    }
                ?>
                <?php      
                 // alert if the mail sent for cancellation  
                    if(isset($_REQUEST['mailsuccesscancel']))
                    {
                        $Message=$_REQUEST['mailsuccesscancel'];
                        $Message="  You Cancelled your trip ,Plese check your mail";
                ?>
                     <div class="alert alert-success text-center"><?php echo $Message?></div>   
                <?php                            
                    }
                ?>

<?php        
               // alert if there is an error when sendeing cancellation email
                    if(isset($_REQUEST['mailfailledcancel']))
                    {
                        $Message=$_REQUEST['mailfailledcancel'];
                        $Message=" Oops There is a problem we will solve it soon";
                ?>
                     <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                <?php                            
                    }
                ?>

    <ul>
      <li><a href="../update user details.php">Update user info </a></li>
      <li><a href="../show_seats.php">Book My trip</a></li>
      <li><a href="../My_trips.php"> My trips</a></li>
     

    </ul>
  </div>
</body>

</html>
