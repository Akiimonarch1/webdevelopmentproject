<?php 
$con=mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con));
$em=mysqli_escape_string($con,$_POST['email']);
$ps=mysqli_escape_string($con,$_POST['password']);
$r ="SELECT email,password FROM users";
$ps=md5($ps);
$res=mysqli_query($con,$r) or die(mysqli_error($con,$r));
while($result= mysqli_fetch_array($res))
{
if($em==$result['email']&$ps==$result['password'])
{
    session_start();
    $_SESSION['email']=$em;
    $_SESSION['id']=mysqli_insert_id($con);
 header("location:product.php");
}
}
if(isset($result)==FALSE)
{
    echo 'invalid username and password';
}
?>