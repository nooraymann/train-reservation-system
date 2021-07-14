
<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style3.css">
    
    <title>Update User Data</title>
</head>

<body>

            <div class="div1">
              <section class="text">
                
              </section>
              <br>
              
              <section class="section2">
                  <!-- Default form register -->
                  <form class="text-center t p-5" action="../php/update user.php" method="POST">
          
                      <p class="h4 mb-4">Update User Data</p>
                      <br>
                      <br>
                      <div class="form-row mb-4">
                          <div class="col">
                              <!-- First name -->
                              <input type="text"  name="ufname" id="fname" class="form-control" placeholder="First name " value="<?php echo $_SESSION['session_fname'];?>" required>
                          </div>
                          <div class="col">
                              <!-- Last name -->
                              <input type="text" name="ulname"id="lname" class="form-control" placeholder="Last name"  value="<?php echo $_SESSION['session_lname'];?>" required>
                          </div>
                      </div>
                      <!-- User_name -->
                      <input type="text"  name="uusername" id="rmail" class="form-control mb-4" placeholder="User name" value="<?php echo $_SESSION['session_username'];?>" required>

                      <!-- E-mail -->
                      <input type="email"  name="umail" id="rmail" class="form-control mb-4" placeholder="E-mail" value="<?php echo $_SESSION['session_email'];?>"  required>
          
                      <!-- Password -->
                      <input type="password"  name="upass" id="password" class="form-control" placeholder="Password"
                          aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                      <br>
                      <input type="password"  name="uconfirmpass" id="confirmpassword" class="form-control" placeholder="Confirm Password"
                          aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                      <br>
          
                      <!-- Phone number -->
                      <input type="text" name="uphone" id="phone=" class="form-control" placeholder="Phone number"
                          aria-describedby="defaultRegisterFormPhoneHelpBlock"  value="<?php echo $_SESSION['session_phone'];?>" required>
                      <!-- Sign up button -->
                      <br>
                      <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Save</button>
                      <button class="btn btn-outline-info btn-lg" ><a href = "Admin.html">Back To Home </a></button>
                  </form>
          



              </section>
           
</body>
</html>
