<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style3.css">
    
    <title>Find available seats </title>
</head>

<body>

            <div class="div1">
              <section class="text">
                  
              </section>
              <br>
              
              <section class="section2">
                 
                  <form class="text-center t p-5" action="customer trip.php" method= "POST">
                      <p class="h4 mb-4">Find available seats</p>
                      <br>  
                      <br>
                      <input type="text" class="form-control" placeholder="From*" name="fromm" required>
                      <br>
                      <input type="text" class="form-control" placeholder="To*" name="too" required>
                      <br>
                      <input type="text" class="form-control" placeholder="Required number of seats*" name="available_seats" required>
                      <br>
                      <input type="date" class="form-control" placeholder="Date" name="date" required>
                      <br>
                      <input type="time" class="form-control" placeholder="Time*" name="time" required>
                      <br>
                      
                      <button class="btn btn-outline-info my-4 btn-block" type="submit" name ="submit">Find</button>
                      <button class="btn btn-outline-info btn-lg" type="submit"><a href = "customer/customer page.php">Back To Home</a> </button>
                  </form>
          
              
             
          </body>
     </html>