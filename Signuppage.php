<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style2.css">
        <script src="js/validation.js"></script>
        <title>Sign Up</title>
        <style>
           
            </style>
    </head>
    <body>
        <div class="div1">
           
            <br>
            <section class="section2">
                
        <form class="text-center t p-5" action="php/signup.php"  onsubmit="return validate_form(this);" method="POST">
            <p class="h4 mb-5">Sign up</p>
            <!-- duplicated data alert -->
            <?php
                    if(isset($_REQUEST['taken_data']))
                    {
                        $Message=$_REQUEST['taken_data'];
                        $Message= "This Username, E-mail or Phone number is taken";
                ?>
                    <div  class="alert alert-danger text-center"><?php echo $Message; ?></div>                            
                <?php                            
                    }
                ?>

           
            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="firstName" class="form-control" placeholder="First name" name="fname" required>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" name="lname" required>
                </div>
            </div>

            <!--Username-->
            <input type ="text" id ="username" placeholder="Username" class="form-control mb-4" name="username" required>

            <!-- E-mail -->
            <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="mail" required>

            <!-- Password -->
            <input type="password" id="password1" class="form-control mb-4" placeholder="Password" name="password" required>
            <input type="password" id="password2" class="form-control mb-4" placeholder="Confirm Password" name="password" required>

            <!-- Phone number -->
            <input type="text" id="phoneNumber" class="form-control mb-3" placeholder="Phone number"name="phone_number" required>
            
            <!--User Role-->
            <div class="radio">
                <label><input type="radio" name="user_role" value='Customer' checked required> Customer </label>
              </div>
              <div class="radio">
                <label><input type="radio" name="user_role" value='Admin' required> Admin</label>
              </div>
             <!-- Submit / Sign up button -->
            <input class="btn btn-info my-4 btn-block" type="submit" value="Sign up" name="submit">

            <!--back to home button-->
            <button class="btn btn-outline-info btn-lg"><a href="index1.html" class="text-light">Back To Home</a> </button>
        </form>


        </section>
     
    </body>

</html>
