<?php

if(isset($_POST['submit'])) {
      //connect to the DB
      $servername = "localhost";
      $dbusername = "root";
      $dbpassword = "meaw";
      $conn = mysqli_connect($servername, $dbusername, $dbpassword) or die('Can not connect ');
      mysqli_select_db($conn,'register') or die('Can not open database');

      //Get input from the form
      $train_id=$_POST['train_id'];
      $max = $_POST['maxcapacity'];
      $aircon = $_POST['airconditioned'];
      $beds=$_POST['beds'];
      $trainClass = $_POST['train_class'];


      $find= "SELECT * FROM train where train_ID=$train_id"; 
            $result=mysqli_query($conn, $find) ;
            $row=mysqli_num_rows($result);
            if($row==0)
            {header("location: ../Admin/update train page.php? id_notfound ");}
            else{
     // UPDATE details
      $update ="UPDATE `train` 
                SET `maximumcapacity` = '$max',
                    `Airconditioned` = '$aircon',
                    `beds` = '$beds',
                    `class` = '$trainClass'

                WHERE `train_ID` = '$train_id'";

        if(mysqli_query($conn, $update)){
            
            header("Location: ../Admin/index.php?success");
            exit;
        } else {
            header("Location: ../Admin/update train.html?sqlerror");
            exit;
        }
    }
}
mysqli_close($conn);
?>