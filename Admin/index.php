<!DOCTYPE html>
<html>
  <?php
  session_start();
  ?>
<head>
  <meta href="UTF-8">
  <link rel="stylesheet" href="../css/Admin.css">
  <link rel="stylesheet" href="../css/bootstrap.m.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
    .L {
          color: white;
          font-size:35px;
          margin-left: 550px;
          position:absolute;
        }
        a{
          color: white;
          text-decoration: none;
        }

        a:hover{
          background-color:#17a2b8;
          color: #fff;
          padding: 11px;
        }
    </style>
</head>
<body>
  
  <div class="Nav">
      <ul >
        <i class="fas fa-subway" style="color:white"></i>
         <li><a>Train Booking</a></li>
         <li><a style="margin: 120px;">Welcome <?php echo $_SESSION['session_fname']; ?></a></li>
         <li class="L"><a href="../php/logout.php">log out</a></li>
         
      </ul>
  </div>
  <div class="sideNav">

    <ul>
      <li><a href="../update user details.php">Update user details</a></li>
      <li><a href="add train page.php">Add new train </a></li>
      <li><a href="update train page.php">Update a train </a></li>
      <li><a href="add trip page.php">Add new trip </a></li>
      <li><a href="update trip page.php">Update a trip </a></li>
      <li><a href="../trips_admin.php">show all trips </a></li>
      <li><a href="../trains_admin.php">show all trains </a></li>


    </ul>
  </div>
</body>
</html>
