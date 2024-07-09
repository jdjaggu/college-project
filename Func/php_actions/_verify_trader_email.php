<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$to = 'huddersfaxclicknpick@gmail.com';
$subject = "Email Verification from Cluckhuddersfax Click 'n Pick";
$message = "<html>
            <head>
                <title>Trader Email Verification</title>
            </head>
            <body style='font-family: Montserrat, sans-serif;'>
                <div class='trader-email-verification'>
                    <h2>Trader Details</h2>
                    <div class='details'>Trader Name: $fname $lname</div>
                    <div class='details'>Email: $email</div>
                    <div class='details'>Phone: $phone</div>
                    <div class='details'>Address: $address</div>
                    <div class='details'>Date of Birth: $dob</div>
                    <div class='details'>Gender: $gender</div>
                    
                    <div style='margin-top: 1rem; display: flex;'>
                        <button style='background-color: #000;'>
                            <a style='text-decoration: none; color: #fff;' href ='http://localhost/Aprameya/CopyPP/HTML%20Template/Func/php_actions/approve_trader_token.php?token=$token'>Approve</a>
                        </button>
                        <button style='background-color: #000;'>
                            <a style='text-decoration: none; color: #fff;' href ='http://localhost/Aprameya/CopyPP/HTML%20Template/Func/php_actions/deny_trader_token.php?token=$token'>Deny</a>
                        </button>
                    </div>
                </div>
            </body>
            </html>";

// To send HTML mail, the Content-type header must be set while sending HTML DOcument
$headers = 'MIME-Version: 1.0'. "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

// Additional headers
$headers .= 'FROM:< 	huddersfaxclicknpick@gmail.com>' . "\r\n";
//$headers .= 'Cc: kraban20@tbc.edu.np' . "\r\n";
//$headers .= 'Bcc: rabankathariya.alldoc@gmail.com' . "\r\n";

// Mail it
mail($to, $subject, $message,$headers);