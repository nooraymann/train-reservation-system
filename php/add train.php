
<?php
        //Connect database
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect');
          
        //start session to get Admin ID
        session_start();
        if (isset( $_POST['submit'])) {
            $capacity = $_POST['maxcapacity'];
            if(isset( $_POST['airconditioned'])){
                $aircon = $_POST['airconditioned'];
            }
            else{
                echo"airconditioner error";
            }
            if(isset( $_POST['airconditioned'])){
                $beds = $_POST['beds'];
            }
            else{
                echo"bed error";
            }
            $class=$_POST['train_class'];
            $admin_idd=$_SESSION['session_ID'];
            

            $sql = "INSERT INTO train (maximumcapacity, Airconditioned, beds, class,admin_ID) VALUES ('$capacity',' $aircon', '$beds', '$class','$admin_idd'); ";
            if(mysqli_query($conn, $sql)){
                header("Location: ../Admin/index.php?success");
            }
            else{
              
             header("Location: ../Admin/add train page.php?insertion failled");
            }
            mysqli_close($conn);
        }
?>