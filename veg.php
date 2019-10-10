
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
                    <!--div class="logo"><a href="#"><img src="img3/logo.jpg"></a>
        </div-->
                   <a href="pizzaexpress.html" class="navbar-brand">Pizza Express</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="signup1.html"> <span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
                        <li><a href="login1.html"> <span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
			<li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>  
            </div>
         </nav>
        
        <br><br><br><br><br>

<?php
session_start();
$product_ids = array();
session_destroy();


if(filter_input(INPUT_POST,'add_to_cart')) {
  if(isset($_SESSION['shopping_cart'])){
   $count=count($_SESSION['shopping_cart']);

    $product_ids=array_column($_SESSION['shopping_cart'],'id');

    if(!in_array(filter_input(INPUT_GET,'id'), $product_ids)) {
      $_SESSION['shopping_cart'][$count] = array
    (
      'id' => filter_input(INPUT_GET,'id'),
      'name' => filter_input(INPUT_POST,'name'),
      'price' => filter_input(INPUT_POST,'price'),
      'quantity' => filter_input(INPUT_POST,'quantity')
    );

     }
    else {
      for( $i = 0; $i < count($product_ids); $i++){
        if($product_ids[$i] == filter_input(INPUT_GET,'id')){
          $_SESSION['shopping_cart'][$i]['quantity'] +=   filter_input(INPUT_POST,'quantity');
        }
      }
    }
      
   

  }
  else{
    $_SESSION['shopping_cart'][0] = array
    (
      'id' => filter_input(INPUT_GET,'id'),
      'name' => filter_input(INPUT_POST,'name'),
      'price' => filter_input(INPUT_POST,'price'),
      'quantity' => filter_input(INPUT_POST,'quantity')
    );
      

  }
}
pre_r($_SESSION);

function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>' ;
}
?>






<div class="container">
  <?php


$connect =mysqli_connect('localhost','root','','veg');
$query='SELECT * FROM veg1 ORDER by id ASC';

$result=mysqli_query($connect,$query);

if($result) {
    if(mysqli_num_rows($result)>0) 
    {
      while($veg1 =mysqli_fetch_assoc($result)) {
        
      ?>
  
          <div class = "col-sm-4 col-md-3">
          <form method="post" action="veg.php?action=add&id=<?php echo $veg1['id']; ?>">
            <div class="products">
          <img src="<?php echo $veg1['image']; ?>" class="img-responsive" />


         <h3 class="text-info"> <?php echo $veg1['name'] ?> </h3>
         <p> <?php echo $veg1['ingredients'] ?> </p>
         <h4> RS <?php echo $veg1['price']; ?> </h4>
         <input type="text" name="quantity" class="form-control" value="1" />
           <input type="hidden" name="name" value="<?php echo $veg1['name']; ?>" />
           <input type ="hidden" name="price" value="<?php echo $veg1['price']; ?>" />
          <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary btn-block" value="Add to Cart" /> 
          </div>
        </form>
        </div>


    <?php

 }

    }
}
?>
</div>
</body>
</html>



    