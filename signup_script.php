<?php 
$con = mysqli_connect("localhost","root","","store")
        or die(mysqli_error($con));
session_start();
$em= mysqli_escape_string($con,$_POST['email']);
$nm=mysqli_escape_string($con,$_POST['name']);
$pas=mysqli_escape_string($con,$_POST['password']);
$cnt=mysqli_escape_string($con,$_POST['contact']);
$ct=mysqli_escape_string($con,$_POST['city']);
$ad=mysqli_escape_string($con,$_POST['address']);
$pas=md5($pas);
$r="SELECT email FROM users";
$r1=mysqli_query($con,$r);
while($r2=mysqli_fetch_assoc($r1))
{
    if($em==$r2['email'])
        {
    echo '<h3>user already registered</h3>';
    echo '<h3><a href="login.php">login</a>us</h3>';
    break;
}
}
while(isset($r2)==FALSE)
{
    $reg_query = "insert into users(email,name,password,contact,city,address) values('$em','$nm','$pas','$cnt','$ct','$ad')" or
        die (mysqli_error($con,$req_query));
$reg_submit=mysqli_query($con,$reg_query) or
        die (mysqli_error($con,$req_query));
session_start();
        $_SESSION['email']=$em;
        $_SESSION['id']=mysqli_insert_id($con);
header("location:product.php");
break;
}
?>