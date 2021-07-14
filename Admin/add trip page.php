<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style3.css">
    
    <title>Add trip </title>
</head>

<body>

            <div class="div1">
              <section class="text">
                  
              </section>
              <br>
              
              <section class="section2">
                 
                  <form class="text-center t p-5" action="../php/add trip.php" method= "POST">
                      <p class="h4 mb-4">Add Trip</p>
                      <br>
                      <?php 
                    if(isset($_REQUEST['notfound']))
                    {
                        $Message=$_REQUEST['notfound'];
                        $Message= "This train ID is not found in the system";
                ?>
                    <div  class="alert alert-danger text-center"><?php echo $Message; ?></div>                            
                <?php                            
                    }
                   
                ?>
                      
                      <br>
                      <input type="text" class="form-control" placeholder="From*" name="from" required>
                      <br>
                      <input type="text" class="form-control" placeholder="To*" name="to" required>
                      <br>
                      <input type="number" class="form-control mb-4" placeholder="Train ID* note: If you don't know the  ID you can select show trains option" name="train_ID" required>
                      <a  href="../trains_admin.php" > Show trains </a>
                      <br>
                      <input type="text" class="form-control mt-4" placeholder="Maximum Passengers*" name="available_seats" required>
                      <br>
                      <input type="text" class="form-control" placeholder="Price*" name="price" required>
                      <br>
                      <input type="date" class="form-control" placeholder="Date" name="date" required>
                      <br>
                      <input type="time" class="form-control" placeholder="Time*" name="time" required>
                      <br>
                      
                      <button class="btn btn-info my-4 btn-block" type="submit" name ="submit">Add trip</button>
                      <button class="btn btn-outline-info btn-lg" ><a href = "../Admin/index.html">Back To Home</a> </button>
                  </form>
          
              </section>
            
          </body>
     </html>