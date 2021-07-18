<?php $con=mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con));?>
<?php include 'header.php'; ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
<div class="row pd ct">
    <div class="col-xs-4 col-xs-offset-4">
    <form method="POST" action="forgot.php">
        Enter Email address<br>
        <input type="text" placeholder="Email" name="email">
    </form>
</div>
</div>
        <div class="pt1">
<?php include 'footer.php'; ?>
        </div>
    </body>
</html>