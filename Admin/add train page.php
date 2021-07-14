<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style3.css">
    
    <title>Add Train </title>
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
                 
                  <form class="text-center t p-5" action="../php/add train.php" method= "POST">
                      <p class="h4 mb-4">Add Train Details</p>
                      <br>
                      <?php 
                    if(isset($_REQUEST['insertion failled']))
                    {
                        $Message=$_REQUEST['insertion failled'];
                        $Message= "wrong data";
                ?>
                    <div  class="alert alert-danger text-center"><?php echo $Message; ?></div>                            
                <?php                            
                    }
                ?>
                      <br>
                      <input type="text" class="form-control" placeholder="maximum capacity*" name="maxcapacity" required>
                      <br>
                      <input type="number" class="form-control" placeholder="Train Class (with numbers)*" min="1" max="3" name="train_class" required>
                      <br><br>
                      <label class='B' >Air conditioned</label>
                       <label><input type="radio" class="form-control" value="yes" name="airconditioned" checked required >Yes </label>
                      <label><input type="radio" class="form-control" value="no" name="airconditioned"  required >No</label>
                      <br>
                      <label class='B' > Contains Beds &nbsp;</label>
                       <label><input type="radio" class="form-control" value="yes"  name="beds" checked required >Yes </label>
                      <label><input type="radio" class="form-control"  value="no" name="beds"  required >No</label>
                      <br>
                      <button class="btn btn-info my-4 btn-block" type="submit" name ="submit">Confirm</button>
                      <button class="btn btn-outline-info btn-lg"><a href = "index.php">Back To Home</a> </button>
                  </form>
          
              </section>
           
          </body>
     </html>