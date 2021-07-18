<?php $con= mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con));
session_start();
$item_id=$_GET['id'];
$em=$_SESSION['email'];
          $re="SELECT id FROM users WHERE email='$em'";
          $ru=mysqli_query($con,$re);
          $run= mysqli_fetch_assoc($ru);
          $user_id=$run['id'];
$r="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
$res=mysqli_query($con,$r) or die(mysqli_error($con,$r));
header("location:product.php");
?>