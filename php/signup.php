<html>
<head>
</head>
<body class='body'>
<?php
session_start();
// Connect to database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$conn = mysqli_connect($servername, $dbusername, $dbpassword) or die('Can not connect ');
mysqli_select_db($conn,'register') or die('Can not open database');

//get the data from the post global variable and store it in the database

if( isset( $_POST['fname'])) {
    $fname =stripslashes( $_POST['fname']); 
    $fname = mysqli_real_escape_string($conn,$fname); 
} 
else {echo"first name error";}
if( isset( $_POST['lname'])) {
    $lname =stripslashes( $_POST['lname']); 
    $lname = mysqli_real_escape_string($conn,$lname); 
} 
else {echo"last name error";}

 if( isset( $_POST['username'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($conn,$username);
} 
else {echo"username error";}

if( isset( $_POST['mail'])) {
    $email =stripslashes( $_POST['mail']); 
    $email = mysqli_real_escape_string($conn,$email); 
} 
else {echo" mail error";}
if( isset( $_POST['password'])) {
    $password =stripslashes( $_POST['password']); 
    $password = mysqli_real_escape_string($conn,$password); 
} 
else {echo"password error";}
if( isset( $_POST['phone_number'])) {
    $phonenumber =stripslashes( $_POST['phone_number']); 
    $phonenumber = mysqli_real_escape_string($conn,$phonenumber); 
} 
else {echo"phone number error";}

if( isset( $_POST['user_role'])) {
    
    $role = $_POST['user_role']; 
  
} 
else {echo"role error";}

//hashing the password to store it in the database 

$hash = password_hash($password, PASSWORD_DEFAULT); 
$query = "INSERT INTO users (fname, lname, username, email, password_, phonenumber,role_)
VALUES ('$fname', '$lname', '$username', '$email', '$hash', '$phonenumber','$role')";
     if (mysqli_query($conn, $query)) {
        header("location: ../loginpage.php");
      } else {
//if the query didn't exxecuted therfore the user data is exist in the DB 
//because the mail,phone number,and username is unique constraint.

        header("Location: ../signuppage.php?taken_data");
        exit;
      }

      mysqli_close($conn);
    
?>
</body>
</html>