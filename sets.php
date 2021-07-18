<?php $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
include 'common.php';
$old= mysqli_escape_string($con,$_POST['old']);
$new=mysqli_escape_string($con,$_POST['new']);
$re=mysqli_escape_string($con,$_POST['re']);
$em=$_SESSION['email'];
$r="SELECT password FROM users WHERE email='$em'";
$r1=mysqli_query($con,$r);
$r2=mysqli_fetch_assoc($r1);
$ps=$r2['password'];
$old=md5($old);
if($ps==$old){
    if($new==$re){
        $new=md5($new);
        $res="UPDATE users SET password='$new' WHERE email='$em'";
        $result=mysqli_query($con,$res);
        echo 'Passsword Set Successfully';
    }
    else{
        echo 'Password not match';
    }
}
    else{
        echo 'Invalid Password';
    }?>