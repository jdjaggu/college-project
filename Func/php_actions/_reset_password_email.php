<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$to = $email;
$subject = "Password reset email from Cleckhuddersfax Click 'n Pick";
$message = "<html>
            <head>
                <title>Password Reset</title>
            </head>
            <body>
                <h2>Reset Your Password</h2>                
                <br><br>
                <a href ='http://localhost/Cleckhuddersfax_Click_n_Pick/php_actions/reset_password_token.php?token=$token'>Reset
Password</a>
</body>

</html>";

// To send HTML mail, the Content-type header must be set while sending HTML DOcument
$headers = 'MIME-Version: 1.0'. "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

// Additional headers
$headers .= 'FROM:< cluckhuddersfax.business@gmail.com>' . "\r\n";
    //$headers .= 'Cc: kraban20@tbc.edu.np' . "\r\n";
    //$headers .= 'Bcc: rabankathariya.alldoc@gmail.com' . "\r\n";
    // Mail it
    mail($to, $subject, $message,$headers);