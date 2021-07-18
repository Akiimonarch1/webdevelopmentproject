<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $con= mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
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
        <?php  include 'header.php';  ?>
        <div class="row pd ct">
            <div class="container">
                <div class="col-xs-4 col-xs-offset-4">
                        <h3>Change Password</h3>
                        <form method="POST" action="sets.php">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old"placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"required="true"pattern=".{6,}" name="new"placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"required="true"pattern=".{6,}" name="re"placeholder="Re-type New Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>
            </div>
            </div>
        </div>
        <div class="pt">
       <?php include 'footer.php'; ?>
        </div>
    </body>
</html>