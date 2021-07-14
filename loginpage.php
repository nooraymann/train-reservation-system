<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
        <title>Login</title>
    </head>

    <body>
        
        <div class="div1">
            <section class="text">
                <ul type="none">
                <li><a href="index1.html"> Home</a></li>
            <li><a href="#" onclick="getMostVisited()">Most visited</a></li>
            <li><a href="#" onclick="getContact()">Contact</a></li>
            <li><a href="#" onclick="getAbout()">About</a></li>
                </ul>
            </section>
        <br>
            <section class="aassas">
            <!-- Default form login -->
                <form class="text-center w-50  p-5" action="php/login.php" method="POST">
                    <p class="h4 mb-5">Login</p> 
                 <!-- wrong password alert -->
                   <?php
                    if(isset($_REQUEST['incorrectpwd']))
                    {
                        $Message=$_REQUEST['incorrectpwd'];
                        $Message= "wrong password";
                ?>
                    <div  class="alert alert-danger text-center"><?php echo $Message; ?></div>                            
                <?php                            
                    }
                ?>
                <!-- wrong username alert -->
                <?php 
                    if(isset($_REQUEST['wrongusername']))
                    {
                        $Message=$_REQUEST['wrongusername'];
                        $Message= "wrong username";
                ?>
                    <div  class="alert alert-danger text-center"><?php echo $Message; ?></div>                            
                <?php                            
                    }
                ?>
                    <!-- Email -->
                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="login_mail" value = "<?php if (isset($_COOKIE['cookiesEmail'])){ echo $_COOKIE['cookiesEmail'];}?>" required>

                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="login_password" value = "<?php if (isset($_COOKIE['cookiesPassword'])){ echo $_COOKIE['cookiesPassword'];}?>" required>

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox text-light">
                                <input type="checkbox" class="custom-control-input" id="remember" name = "remember" "<?php if (isset($_COOKIE['cookiesEmail'])){ echo "checked = 'checked'";  }?>" value =1 >
                                <label class="custom-control-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href=""> Forget password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit" name="submit">Sign in</button>
                </form>        
            </section>
        </div>
        
        <div id="MostVisited"></div>
        <div id="Contact"></div>
        <div id="About"></div>
        
        <script>
             function getMostVisited () {
                var request = new XMLHttpRequest();
                request.onreadystatechange = function() {
                    if(this.readyState === 4 && this.status === 200) {
                        document.getElementById("MostVisited").innerHTML = this.responseText;
                    }
                }
                request.open("GET","Most visited.html",true);
                request.send();
            }
            function getNews () {
                    var request = new XMLHttpRequest();
                    request.onreadystatechange = function() {
                        if(this.readyState === 4 && this.status === 200) {
                            document.getElementById("News").innerHTML = this.responseText;
                        }
                    }
                    request.open("GET","News.html",true);
                    request.send();
                }
            function getContact () {
                    var request = new XMLHttpRequest();
                    request.onreadystatechange = function() {
                        if(this.readyState === 4 && this.status === 200) {
                            document.getElementById("Contact").innerHTML = this.responseText;
                        }
                    }
                    request.open("GET","Contact.html",true);
                    request.send();
                }
            function getAbout () {
                    var request = new XMLHttpRequest();
                    request.onreadystatechange = function() {
                        if(this.readyState === 4 && this.status === 200) {
                            document.getElementById("About").innerHTML = this.responseText;
                        }
                    }
                    request.open("GET","About.html",true);
                    request.send();
                }
        </script>
    </body>

</html>
