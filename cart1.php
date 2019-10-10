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
                        <li class="active"><a href="signup1.php"> <span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
                        <li><a href="login1.php"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>  
            </div>
        </nav><br><br><br><br><br>
        <div class="container">
            <div class="jumbotron">
                <center>
                <h1>Welcome to Pizza Express!</h1>
                <p> We have the best toppings, fresh veggies and various shakes for you.</p>
                <p>No need to hunt different sites.We have all in one place.</p>
                </center>
            </div>
        </div>
         <div class = "row">
   
   <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
          <img src="img3/veg.jpg" alt="Responsive image ">
      </div>
      
      <div class = "caption">
          <center>
         
           <a href="veg.php"><button class="btn btn-danger btn-lg active">Veg Pizza</button></a>
            
         
          </center> 
      </div>
   </div>
	
	<div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
         <img src="img3/nonveg.jpg" alt="Responsive image ">
      </div>
      
      <div class = "caption">
         
         
          <center>
            <a href="nonveg.php"><button class="btn btn-danger btn-lg active">Non-Veg Pizza</button></a>
         
          </center>
      </div>
   </div>
   
   <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
         <img src="img3/sides.jpg" alt="Responsive image ">
      </div>
      
      <div class = "caption">
         
          <center>
           <a href="sides.php"><button class="btn btn-danger btn-lg active">Sides</button></a>
           
          </center>
         
      </div>
   </div>
   
   <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
        <img src="img3/beverages.jpg" alt="Responsive image ">
      </div>
      
      <div class = "caption">
         
         
          <center>
           <a href="beverages.php"><button class="btn btn-danger btn-lg active">Beverages</button></a>
          </center>
         
      </div>
   </div>
   
</div>
           
        <br><br>
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
