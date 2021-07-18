<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
       <?php include 'header.php'  ?>
        <div class="container">
        <div class="row pd ct">
        <div class="col-xs-4 col-xs-offset-4">
        <div class="panel panel-primary">
        <div class="panel-heading">
            <h4>LOGIN</h4>
        </div>
            <div class="panel-body">
                <div class="text-warning">
                    <p>Login to make a purchase</p>
                </div>
                <form  method="POST" action="log.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            <div class="form-group">
                <button class="btn btn-primary">Login</button>
                </div>
                    <a href="for.php">Forgot Password?</a>
                </form>
            </div>
            <div class="panel-footer">Don't have an account?<a href="signup.php">Register</a>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="p">
      <?php include 'footer.php'; ?>
        </div>
    </body>
</html>