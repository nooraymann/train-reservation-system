<?php
    
if (isset( $_POST['submit'])) {
    //Connect database
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "meaw";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');

    //Get data from the form
    $trip_id=$_POST['trip_id'];
    $station = $_POST['from'];
    $dest = $_POST['to'];
    $trainID = $_POST['train_ID'];
    $seats = $_POST['available_seats'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    //make the input time format = the phpmyadmin time format
    $time = date("H:i:s");
    //check if the train is exist or not in the DB
    $find= "SELECT * FROM train where train_ID=$trainID"; 
            $result=mysqli_query($conn, $find) ;
            $row=mysqli_num_rows($result);
            if($row==0)
            {header("location: ../Admin/update trip page.php? invalid_train");}
            else{
                $find2= "SELECT * FROM trip where trip_ID=$trip_id"; 
                $result=mysqli_query($conn, $find2) ;
                $row=mysqli_num_rows($result);
                if($row==0)
                {header("location: ../Admin/update trip page.php?  invalid_trip ");}
                else{
                    $clas_query2="SELECT class from train where train_ID=$trainID";
                    if($classresultt=mysqli_query($conn,$clas_query2)){
                        if($triproww=mysqli_fetch_assoc($classresultt))
                        {
                           $trip_class=$triproww['class'];
                        }
                    }
                    else{echo "Error: " . $clas_query2 . "<br>" . mysqli_error($conn);}
    //UPDATE details
    $update ="UPDATE `trip` 
              SET `station` = '$station',
                  `availableSeats` = '$seats',
                  `destination` = '$dest',
                  `date_` = '$date',
                  `time_` = '$time',
                  `class`='$trip_class'
              Where `trip_ID` =  $trip_id ";

     if(! $conn-> query ($update)){
         header("Location: ../Admin/update trip page.php?sqlerror");
         exit;
     } else {
         header("Location: ../Admin/index.php?success");
         exit;
     }
    }
    }
}
mysqli_close($conn);
?>