<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$con=mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con)); 
include 'common.php';?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}
input[type=text], input[type=password] {
    width: 40%;
    display: inline-block;
   font-size:16px;
}
button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}
</style>
    <body>
        <?php include 'header.php';?>
        <?php 
        function check_if_added_to_cart($item_id)
        {
            $con=mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con)); 
            $em=$_SESSION['email'];
            $re="SELECT id FROM users WHERE email='$em'";
          $ru=mysqli_query($con,$re);
          $run= mysqli_fetch_assoc($ru);
          $user_id=$run['id'];
            $r=" SELECT status FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
                  $res=mysqli_query($con,$r);
          $result= mysqli_num_rows($res);
          if($result >0){
              return 1;
          }
        }?>
        <div id="modal-wrapper" class="modal">
              <form class="modal-content animate" method="POST" action="log.php">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h4><strong>&nbsp;&nbsp;LOGIN</strong></h4><hr>
      <p>&nbsp;&nbsp;Don't have an account?<a href="signup.php">Register</a></p>
      <div class="container">
          <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            <div class="form-group">
                <button class="btn btn-primary">Login</button>
                </div>
          <a href="for.php">Forgot Password?</a>
                </form>
            </div>
        </div>
             </div>
        </div>
        <div class="container">
            <div class="row pd">
            <div class="jumbotron">
                <center>
                <h1>A Laptop for Everyone!</h1>
                <p>We have the best laptops with best features and best performance.</p>
                </center>
            </div>
        </div>
        </div>
        <div class="row conti">
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/21.jfif"></a>
                <div class="caption">
                <h3>Lenovo Ideapad S130</h3>
                <p>15.6' FHD Screen 8GB RAM 1TB HDD</p>
                <p>Price:Rs.38000.00</p>
                 <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                                                       
                              } else {        
                                     if(check_if_added_to_cart(1)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
       
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
           <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/22.jpg"></a>
                <div class="caption">
                <h3>Lenovo Ideapad S220</h3>
                <p>15.6' FHD Screen 8GB RAM 1TB HDD</p>
                <p>Price:Rs.40000.00</p>
                 <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(2)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/23.jpg"></a>
                <div class="caption">
                    <h3>Lenovo Thinkpad Z22 </h3>
                     <p>15.6' FHD Screen 16GB RAM 1TB HDD</p>
                <p>Price:Rs.51500.00</p>
                 <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(3)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/26.jpg"></a>
                <div class="caption">
                <h3>Asus Rog #GAM1</h3>
                 <p>15.6' FHD Screen 12GB RAM 1TB HDD /p>
                <p>Price:Rs.77000.00</p>
<?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(4)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/27.jpg"></a>
                <div class="caption">
                <h3>Asus Zen #7IO</h3>
                 <p>15.6' FHD Screen 4GB RAM 1TB HDD</p>
                <p>Price:Rs.43000.00</p>
               <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(5)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
           <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/29.jpg"></a>
                <div class="caption">
                <h3>Asus Zen Pro #54P</h3>
                 <p>15.6' FHD Screen 8GB RAM 1TB HDD</p>
                <p>Price:Rs.49000.00</p>
                 <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(6)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/30.jpg"></a>
                <div class="caption">
                <h3>HP Masterclass #4SO</h3>
                 <p>15.6' FHD Screen 8GB RAM 1TB HDD</p>
                <p>Price:Rs.53000.00</p>
               <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(7)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
           <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/31.jpg"></a>
                <div class="caption">
                <h3>HP Fiber #201</h3>
                 <p>15.6' FHD Screen 8GB RAM 1TB HDD</p>
                <p>Price:Rs.56000.00</p>
                <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(8)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
           <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/32.jpg"></a>
                <div class="caption">
                <h3>HP Wind #234</h3>
                 <p>15.6' FHD Screen 12GB RAM 1TB HDD</p>
                <p>Price:Rs.58000.00</p>
                <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(9)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
         <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/34.jpg"></a>
                <div class="caption">
                <h3>MacBook #34B</h3>
                 <p>13.5' FHD Screen 4GB RAM 1TB HDD</p>
                <p>Price:Rs.78000.00</p>
               <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(10)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
           <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/35.jpg"></a>
                <div class="caption">
                <h3>MacBook #345</h3>
                  <p>14.3' FHD Screen 8GB RAM 1TB HDD</p>
                <p>Price:Rs.87000.00</p>
                 <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(11)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
           <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="img/36.jpg"></a>
                <div class="caption">
                <h3>MacBook #43P</h3>
                  <p>15.1' FHD Screen 12GB RAM 1TB HDD</p>
                <p>Price:Rs.81000.00</p>
              <?php if (!isset($_SESSION['email'])) {?>                  
                <button onclick="document.getElementById('modal-wrapper').style.display='block'"class="btn btn-primary btn-block">Order Now!</button>   
                              <?php                        
                              } else {        
                                     if(check_if_added_to_cart(12)!=0){
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';         
                              } else {                             
                                ?>                                 
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
                                  <?php   
                                  } 
                              }
                                  ?> 
            </div>
            </div>
            </div>
        </div>
       <?php include 'footer.php'; ?>
    </body>
 </html>
           