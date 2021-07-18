<?php $con= mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
 session_start();
$id=$_GET['id'];
$em=$_SESSION['email'];
$r="SELECT id FROM users WHERE email='$em'";
$re= mysqli_query($con, $r);
$res=mysqli_fetch_assoc($re);
$user_id=$res['id'];
$r1_query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$id'";
$r1_submit=mysqli_query($con,$r1_query);
header("location:cart.php");?>