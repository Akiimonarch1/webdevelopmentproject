<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php $com=mysqli_connect("localhost","root","","store") or die(mysqli_error($con)); 
session_start();?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
      <?php include 'header.php'; ?>
            <div class="row">
                 <div class="container pd">
                     <div class="col-xs-4 col-xs-offset-4">
                         <p><h5>Thank you for ordering from E-store.The order shall be delieverd to you shortly. <hr>      
                             Order Some more laptops<a href="product.php">here</a></h5></p>
            </div>
        </div>
            </div>
        <div class="pt1">
         <?php include 'footer.php'; ?>
        </div>
    </body>
 </html>