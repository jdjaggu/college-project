<?php
session_start();
include('connection.php');
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    if (isset($_POST['submit'])) {
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,}$/';

        if ((!empty($password)) && (!empty($cpassword))) {
            
            $pass = md5($password);
            $cpass = md5($cpassword);

            if ($pass == $cpass) {
                $update_query = oci_parse($connection, "UPDATE USER_DETAIL SET USER_PASSWORD = :password_bv WHERE USER_TOKEN = :token_bv");
                //binding token_bn variable 
                oci_bind_by_name($update_query, ':password_bv', $pass);
                oci_bind_by_name($update_query, ':token_bv', $token);

                if (preg_match($passwordPattern, $password)) {

                    //executing the query
                    if (oci_execute($update_query)) {
                        $_SESSION['message'] = 'Password reset succesfully!';
                        header("Location: ../signin.php");
                        exit(0);
                    } else {
                        $_SESSION['message'] = 'Password reset failed';
                        header("Location: http://localhost/Aprameya/CopyPP/HTML%20Template/Func/php_actions/reset_password_token.php?token=$token");
                        exit(0);
                    }
                } else {
                        $_SESSION['message'] = "Invalid Password (atleast one A-Z, a-z, 0-9, >6)";
                }
            } else {
                $_SESSION['message'] = 'Password does not match';
                header("Location: http://localhost/Aprameya/CopyPP/HTML%20Template/Func/php_actions/reset_password_token.php?token=$token");
                exit(0); 
            } 
            
        } else {
            $_SESSION['message'] = 'Password field should not be empty';
            header("Location: http://localhost/Aprameya/CopyPP/HTML%20Template/Func/php_actions/reset_password_token.php?token=$token");
            exit(0);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #FCF6FF;
    }

    .verify {
        position: absolute;
        top: 10vh;
        left: 50%;
        transform: translateX(-50%);
        width: fit-content;
        color: #e13939;
        font-size: 1.4rem;
        font-weight: bold;
    }

    .signin-container {
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.5rem;
        background-color: #FCF6FF;
        margin-top: 20vh;
    }

    .signin-container .x {
        margin-bottom: 50px;
        font-size: 2rem;
    }

    .signin-container .forms-body {
        display: flex;
        flex-direction: row;
        gap: 100px;
        font-size: 1.5rem;
    }

    .login-form {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-between;
    }

    input {
        margin: 10px 0px;
        height: 2.5rem;
        width: 100%;
        border: 1px solid black;
        border-radius: 10px;
        font-size: 1.5rem;
        padding: 0 10px 0 10px;
    }

    .sub {
        font-size: 1.5rem;
        height: 45px;
        align-self: center;
        background-color: #FCF6FF;
        color: #000;
        cursor: pointer;
        box-shadow: -1px 1px 3px -1px rgba(0, 0, 0, 0.75);
        border-radius: 7px;
    }

    .sub:hover {
        color: #FCF6FF;
        background-color: #89ABE3;
    }
    </style>
</head>

<body>
    <?php //include "../_header.php" 
    ?>

    <div class="verify">
        <?php if (isset($_SESSION['message']))
            echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>

    <div class="signin-container">
        <h2 class=" x">Reset Password</h2>

        <div class="forms-body">
            <form action="" method="post" class="login-form">
                <label for=" password">New Password</label>
                <input type="password" name="password" id="password" /><br>

                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" /><br>

                <input type="submit" name="submit" value="Reset Password" class="sub"><br>
            </form>
        </div>
    </div>

    <?php //include "../_footer.php" 
    ?>
</body>

</html>