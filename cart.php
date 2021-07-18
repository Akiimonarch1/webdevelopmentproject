<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $con=mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con));
        session_start(); ?>
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
        <div class="row pd ct">
            <div class="container">
                <div class="col-xs-4 col-xs-offset-4">
                        <?php
                            $em=$_SESSION['email'];
                            $r="SELECT id FROM users WHERE email='$em'";
                            $re= mysqli_query($con, $r);
                            $res=mysqli_fetch_assoc($re);
                            $user_id=$res['id'];
                            $resu="SELECT * FROM users_items WHERE user_id='$user_id'AND status='Added to cart'";
                            $resul=mysqli_query($con,$resu);
                            $result= mysqli_num_rows($resul);
                                    if($result==0){?>
                    <table class="table">
                                        <tr><th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th></tr>
                    </table>
                             <?php    }else{?>
                         <table class="table">
                        <tr><th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th></tr>
                                      <?php  $e=0;$p=0;
                            $resu="SELECT * FROM users_items WHERE user_id='$user_id'AND status='Added to cart'";
                            $resul=mysqli_query($con,$resu);
                            while ($result=mysqli_fetch_assoc($resul)){
                            $id=$result['item_id'];
                            $r1="SELECT item,name,price FROM user_product WHERE id='$id'";
                                  $r2= mysqli_query($con,$r1);
                                  while($rows= mysqli_fetch_assoc($r2)){$e=$e+1; $idi=$rows['item']; $p=$p+$rows['price'];?>
                        <tr><td><?php echo $e; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['price']; ?></td>
                            <td> <a href="cart-remove.php?id=<?php echo $idi ?>" class="btn btn-primary">Remove</a></td></tr>
                              <?php }}?>
                        <tr> <td>Order</td>
                            <td>Total</td>
                            <td>Rs<?php echo $p; ?></td>
                            <td><a href="success.php"class="btn btn-primary">Confirm Order</a></td></tr>
                                 <?php }?>
                    </table>
                </div>
            </div>
        </div>
        <div class="pt1">
    <?php include 'footer.php'; ?>
        </div>
    </body>
 </html>
          