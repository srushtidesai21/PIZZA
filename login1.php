<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
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
          if(isset($_SESSION['username'])){ ?>
            <li><a class="nav-link" href="#">
            <?php echo "Welcome ".$_SESSION['username']; ?>
            </a></li>';
            <?php
          }
            else
            {

            
          echo'<li><a class="nav-link" href="login1.php">LOGIN</a></li>';

          }
          
          ?>
        
        
        
         <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form action="includes/login.inc.php" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="mail" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="pwd" required = "true">
                                </div>
                                <button type="submit" name="login-submit" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup1.php">Register</a></p></div>
                    </div>
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
