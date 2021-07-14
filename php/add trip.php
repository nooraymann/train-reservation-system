<?php

session_start();
        //Connect database
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "meaw";
        $conn = mysqli_connect($servername, $dbusername, $dbpassword, "register") or die('Can not connect ');
            
        if (isset( $_POST['submit'])) {
            $station = $_POST['from'];
            $dest = $_POST['to'];
            $trainID = $_POST['train_ID'];
            $seats = $_POST['available_seats'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $admin=$_SESSION['session_ID'];
            $trip_price=$_POST['price'];

            $find= "SELECT * FROM train where train_ID=$trainID"; 
            $result=mysqli_query($conn, $find) ;
            $row=mysqli_num_rows($result);
            if($row==0)
            {header("location: ../Admin/add trip page.php?notfound");
            exit;}
            else{
            $clas_query="SELECT class from train where train_ID=$trainID";
            if($classresult=mysqli_query($conn,$clas_query)){
                if($triprow=mysqli_fetch_assoc($classresult))
                {
                   $trip_class=$triprow['class'];
                }
            }
            else{echo "Error: " . $clas_query . "<br>" . mysqli_error($conn);}

            $sql = "INSERT into trip (station, destination, date_ ,time_ , availableSeats,class,price,train_ID,admin_id) 
            VALUES ('$station','$dest','$date','$time','$seats','$trip_class','$trip_price','$trainID','$admin')";
            if(mysqli_query($conn, $sql))
            {
                header("location: ../Admin/index.php?success");
            }
            else{
                //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                header("location: ../Admin/add trip.html?sqlfailled");
            }
        }
    }
        mysqli_close($conn);

?>