<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor
-->
<?php $con= mysqli_connect("localhost","root","","store")
        or die(mysqli_error($con)); 
include 'common.php';
?>
<?php          
 if (isset($_SESSION['email'])) { 
      header("location:product.php");
 }                    
     ?> 
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
     <?php include 'header.php';?>
        <div class="c">
        <div class="bg">
            <div class="container">
                <center>
                <div class="in">
                    <div class="bc">
                    <h4>Welcome to E-Store</h4>
                    <p>Buy Laptops with best features</p>
                    <a href="product.php" class="btn btn-danger">Shop Now</a>
                </div>
            </div>
                </center>
        </div>
        </div>
        </div>
        <a href="index.php"><div class="bc1"></div></a>
        <a href="index.php"><div class="bc2"></div></a>
        <a href="index.php"><div class="bc3"></div></a>
        <div class="row">
            <div class="container">
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="index.php"><img src="img/19.jpg"></a>
                    <div class="caption">
                    <h3>Gaming Laptops</h3>
                    <p>Experience the Best Performance.</p>
                    </div>
                </div>
            </div>
                  <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="index.php"><img src="img/20.jfif"></a>
                    <div class="caption">
                      <h3>Business Laptops</h3>
                      <p>Feel the Stress Free Workload.</p>
                    </div>
                </div>
                  </div>
                <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="index.php"><img src="img/18.jpg"></a>
                    <div class="caption">
                      <h3>Education Laptops</h3>
                      <p>Enjoy Learning.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
      <?php include 'footer.php'; ?>
</body>
</html>
