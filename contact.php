<?php
$con=mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con)); 
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
        <?php include 'header.php'; ?>
        <div class="row pd">
            <div class="container">
                <div class="col-xs-10">
                    <h4>LIVE SUPPORT</h4>
                    <h5>24 hours|7 days a week | 365 days a year Live Technical Support</h5>
                    It is a long established fact that a reader will be distracted by the readable content of the page when looking as it layout.The point of using Lorem lpsum is that it has a more or less normal distribution of letters.There are many variations of passages of Lorem lpsum avaiable,but the majority have suffered alteration some form,injecting humour or randomized words which dont look even slight believable.If you are going to use a passage of Lorem lpsum,you need to be sure there isn"t embarassing hidden in the middle of the text.
                </div>
                <div class="col-xs-2">
                    <img src="img/help.jpg">
                </div>
        </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-8">
                    <h4>CONTACT US</h4>
                    <form>
                        <div class="form-group">
                        <label>Name</label><input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                        <label>Email</label><input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                        <label>Message</label><textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
        </div>
                <div class="col-xs-4">
                    <h4>COMPANY INFORMATION :</h4>
                    500 Lorem lpsum Dolar sit,<br>
                    22-52-2-29 Sit Amen,Lorem,<br>
                    USA<br>
                    Phone:(00)222 666 444<br>
                    Fax:(000)000 00 00 0<br>
                    Email:info@e-store.com<br>
                    Follow on:Facebook,Twitter,Instagram
                </div>
            </div>
        </div>
        <?php include 'footer.php';  ?>
    </body>
</html>