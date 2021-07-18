<?php $con = mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con));
session_start();
session_unset();
session_destroy();
header("location:index.php");
?>
