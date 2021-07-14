<?php

if(isset($_POST['submit'])) {
      //connect to the DB
      $servername = "localhost";
      $dbusername = "root";
      $dbpassword = "meaw";
      $conn = mysqli_connect($servername, $dbusername, $dbpassword) or die('Can not connect ');
      mysqli_select_db($conn,'register') or die('Can not open database');

      //Get input from the form
      $fname = $_POST['ufname'];
      $lname = $_POST['ulname'];
      $username = $_POST['uusername'];
      $mail = $_POST['umail'];
      $pass = $_POST['upass'];
      $phone = $_POST['uphone'];
      $uhash=password_hash($pass,PASSWORD_DEFAULT);  //hash the password

      //Start session to get the ID
      session_start();
      $currentID = $_SESSION['session_ID'];

      // UPDATE details
      $update ="UPDATE `users` 
                SET `fname` = '$fname',
                    `lname` = '$lname',
                    `username` = '$username',
                    `email` = '$mail',
                    `password_` = '$uhash',
                    `phonenumber` = $phone
                WHERE `user_ID` = $currentID";
      //check if there any error
      if(! $conn-> query ($update)){
        //echo "Error: " . $query . "<br>" . mysqli_error($conn);
        header("Location: ../update user details.php?sqlerror");
        exit;
      } else {
        //close the concection
        mysqli_close($conn);

          $_SESSION['session_fname']= $fname;
          $_SESSION['session_lname']= $lname;
          $_SESSION['session_username']= $username;
          $_SESSION['session_email']= $mail;
          $_SESSION['session_password']= $pass;
          $_SESSION['session_phone']= $phone;

          if ($_SESSION['session_role'] == "Admin"){
            header("Location: ../Admin/index.php");
            exit;
          } else {
            header("Location: ../Customer/customer page.php");
            exit;
          }
        exit;
      }
      
    } else {
      header("Location: ../update user details.php?submiterror");
    }
    mysqli_close($conn);
?>