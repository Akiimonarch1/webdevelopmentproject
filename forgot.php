<?php $con=mysqli_connect("localhost","root","","store") or
        die(mysqli_error($con));?>
<?php
$email=$_POST['email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
try {
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                  
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'girlystores@gmail.com';                 
    $mail->Password   = 'girlystores';                          
    $mail->SMTPSecure = 'tls';         
    $mail->Port       = 587;                                    
    //Recipients
    $mail->setFrom('estores@gmail.com', 'eStores');
    $mail->addAddress('$email', 'user');     
    $mail->addAddress('$email');               
    $mail->addReplyTo('estores@gmail.com', 'Information');
    $mail->isHTML(true);                                  
    $mail->Subject = "your request to receive the password";
    $mail->Body    = "reset your password here";
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
    $mail->send();
    echo "Message has been sent to your registered email id";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
