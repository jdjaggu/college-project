<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$to = $email;
$subject = "Email Verification from Cluckhuddersfax Click 'n Pick";
$message = "<html>
            <head>
                <title>Email Verification</title>
            </head>
            <body>
                <h2>You have Registered to Our Shopping portal.</h2>
                <h5>Verify your email address to Login with the  below  given link</h5>
                <br><br>
                <a href ='http://localhost/Aprameya/CopyPP/HTML%20Template/Func/php_actions/verify_token.php?token=$token'>Verify Account</a>
            </body>
            </html>";

// To send HTML mail, the Content-type header must be set while sending HTML DOcument
$headers = 'MIME-Version: 1.0'. "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

// Additional headers
$headers .= 'FROM:< huddersfaxclicknpick@gmail.com>' . "\r\n";
//$headers .= 'Cc: kraban20@tbc.edu.np' . "\r\n";
//$headers .= 'Bcc: rabankathariya.alldoc@gmail.com' . "\r\n";
// Mail it
mail($to, $subject, $message,$headers);
?>