<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style3.css">
    
    <title>Update Train </title>
    <style>
        .B
            {
            color: white;
            font-size:25px;
            margin-right: 75px;
            position=absolute;
            padding-bottom: 20px;
            }
        
    </style>
</head>

<body>
            <div class="div1">
              <section class="text">
                 
              </section>
              <br>
              
              <section class="section2">
                 
                  <form class="text-center t p-5" action="../php/update train.php" method= "POST">
                      <p class="h4 mb-4">Update Train Details</p>
                      <br>

                      <?php 
                    if(isset($_REQUEST['id_notfound']))
                    {
                        $Message=$_REQUEST['id_notfound'];
                        $Message= "This train ID is not found in the system";
                ?>
                <?php 
                    if(isset($_REQUEST['sqlerror']))
                    {
                        $Message=$_REQUEST['sqlerror'];
                        $Message= "There is a problem in the database try again later";
                ?>
                    <div  class="alert alert-danger text-center"><?php echo $Message; ?></div>                            
                <?php                            
                    }
                ?>
                    <div  class="alert alert-danger text-center"><?php echo $Message; ?></div>                            
                <?php                            
                    }
                ?>
                      <br>
                      
                      <input type="text" class="form-control mb-4" placeholder=" train_ID* note: If you don't know the ID you can select Show trains option" name="train_id" required>
                      <a  href="../trains_admin.php" > Show trains </a>
                      <br>
                      <input type="text" class="form-control mt-4" placeholder="maximum capacity*" name="maxcapacity" required>
                      <br>
                      <input type="number" class="form-control" placeholder="Train Class (with numbers)*" min="1" max="3" name="train_class" required>
                      <br><br>
                      <label  class='B'>Air conditioned</label>
                       <label><input type="radio" class="form-control " value="yes" name="airconditioned" checked required >Yes </label>
                      <label><input type="radio" class="form-control"  value="no"name="airconditioned" c required >No </label>
                      <br>
                      <label  class='B'>Contains Beds&nbsp;</label>
                       <label><input type="radio" class="form-control"  value="yes "name="beds" checked required >Yes </label>
                      <label><input type="radio" class="form-control" value="no"  name="beds"  required >No</label>
                      
                      <button class="btn btn-info my-4 btn-block" type="submit" name ="submit">Save</button>
                      <button class="btn btn-outline-info btn-lg" type="submit"><a href = "index.php">Back To Home</a> </button>
                  </form>
          
              </section>
           
          </body>
     </html>