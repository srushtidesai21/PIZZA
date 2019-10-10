


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="s2.css" >
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="pizzaexpress.php" class="navbar-brand">Pizza Express</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="signup1.php"> <span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
                        <li><a href="login1.php"> <span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
			<li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>  
            </div>
            </nav><br><br><br><br><br><br><br><br><br><br>


            
        <?php
                        if(isset($_GET["error"])){
                            if ($_GET["error"] == "emptyfields"){
                            echo '<p class="signuperror"><i>Fill in all fields!</i></p>';
                            }
                            else if ($_GET["error"] == "invalidmailname"){
                            echo '<p class="signuperror"><i>Invalid name and e-mail!</i></p>';
                            }
                            else if ($_GET["error"] == "invalidmail"){
                            echo '<p class="signuperror"><i>Invalid e-mail!</i></p>';
                            }
                            else if ($_GET["error"] == "invalidname"){
                            echo '<p class="signuperror"><i>Invalid name!</i></p>';
                            }
                            else if ($_GET["error"] == "emailtaken"){
                            echo '<p class="signuperror"><i>E-mail is already taken!</i></p>';
                            }
                        }
                            else if ($_GET["signup"] == "success"){
                            echo '<p class="signupsuccess"><i>Sign up successful!</i></p>';
                            }
                            ?>
        
        
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">

                        <h2>SIGN UP</h2>
                        
                    
                        <form action="includes/signup.inc.php" method="post">
                            <div class="form-group" >
                                <input class="form-control" placeholder="Name" name="name"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="pwd" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="cont" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="cn" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="addr" required = "true">
                            </div>
                            <button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div><br><br><br><br><br><br><br><br><br><br>
        
        
        <footer>
        <div class="cont">
            <center>
            <p>
           Copyright © Pizza Express. All Rights Reserved | Contact Us: +91 90000 00000”.   
            </p>
            </center>
        </div>
        </footer>
    </body>
</html>
