<?php $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con)); ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
<div class="navbar navbar-default navbar-fixed-top">     
    <div class="container">         
        <div class="navbar-header">             
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">                 
                <span class="icon-bar"></span>                 
                <span class="icon-bar"></span>                 
                <span class="icon-bar"></span>                                     
            </button>             
            <a class="navbar-brand" href="index.php">E-Store</a>         
        </div>         
        <div class="collapse navbar-collapse" id="myNavbar">            
            <ul class="nav navbar-nav navbar-right">      
 <?php          
 if (isset($_SESSION['email'])) {                     
     ?>                     
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>                     
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>                     
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>                     
 <?php
                } 
                else {  
                    ?>                    
                      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                              <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                              <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <?php
                }                   
                ?>             
            </ul>         
        </div>     
    </div> 
</div> 