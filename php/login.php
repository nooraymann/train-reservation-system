<!DOCTYPE html>
<html>
    <head>
    </head>
<body class='body'>
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "meaw";
$conn = mysqli_connect($servername, $dbusername, $dbpassword) or die('Can not connect ');
mysqli_select_db($conn,'register') or die('Can not open database');


    if (isset($_POST['submit'])){
    $login_email = stripslashes($_POST['login_mail']);
    $login_email = mysqli_real_escape_string($conn,$login_email);}
    else{echo" mail error";}
    if (isset($_POST['login_password'])){
    $login_password = stripslashes($_POST['login_password']);
    $login_password = mysqli_real_escape_string($conn,$login_password);}
    else{echo" password error";}

//Checking if this user email is exist or not
//The user can access his account by email or username
    $query = "SELECT * FROM `users` WHERE email=? OR  username =? ;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare ($stmt, $query)) {
        header("Location: ../index1.html?error=sqlerror");
        exit;
    } else {
        mysqli_stmt_bind_param($stmt,"ss",$login_email,$login_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $hashp=password_verify($login_password, $row['password_']);
            
            if($hashp==false){
                header("Location: ../loginpage.php?incorrectpwd");
                exit;
            } else if ($hashp==true){

                //initalize session staff
                session_start();
                $_SESSION['session_ID']= $row['user_ID'];
                $_SESSION['session_fname']= $row['fname'];
                $_SESSION['session_lname']= $row['lname'];
                $_SESSION['session_username']= $row['username'];
                $_SESSION['session_email']= $row['email'];
                $_SESSION['session_password']= $row['password_'];
                $_SESSION['session_phone']= $row['phonenumber'];
                $_SESSION['session_role']= $row['role_'];

                //Now we need to save this user using cookies (in case he checked remember me)
                 //cookies expire after 24 hours 

                if(isset($_POST['remember'])){
                    $escapedRemember = mysqli_real_escape_string($conn, $_POST['remember']);
                    if(isset ($escapedRemember)) {
                        setcookie("cookiesEmail", $login_email, time() + (86400), "/");
                        setcookie("cookiesPassword", $login_password, time() + (86400), "/");
                    } else {
                        setcookie("cookiesEmail", "" , time() - (86400), "/");
                        setcookie("cookiesPassword", "" , time() - (86400), "/");
                    }

                }

                //If everything is okay 
                if($_SESSION['session_role']=='Admin'){
                    header("Location: ../Admin/index.php?loginsuccess");
                    exit;
                }
                else if($_SESSION['session_role']=='Customer'){
                    header("Location: ../Customer/customer page.php?login=success");
                    exit;
                }
             } 
        }
        else {
            header("Location: ../loginpage.php?wrongusername");
            exite ;
        }
    }
    

mysqli_close($conn);
?>
</body>
</html>