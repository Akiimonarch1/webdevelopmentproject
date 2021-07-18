<?php $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con)); ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
<div class="container">
<div class="row ct pd">
    <div class="col-xs-4">
            <img src="img/18_1.jpg">
    </div>
    <div class="col-xs-4 col-xs-offset-4">
            <h2>Sign Up</h2>
            <form method="POST" action="signup_script.php">
            <div class="form-group">
            <input type="text"class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text"class="form-control"required="true"pattern="[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"name="email"placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password"class="form-control"required="true"pattern=".{6,}"name="password"placeholder="Password">
            </div>
            <div class="form-group">
            <input type="text"class="form-control"name="contact" placeholder="Contact">
            </div>
            <div class="form-group">
            <input type="text"class="form-control"name="city" placeholder="City">
            </div>
            <div class="form-group">
            <input type="text"class="form-control"name="address"placeholder="Address">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    </div>
</div>
</div>
        <?php include 'footer.php'; ?>
    </body>
</html>