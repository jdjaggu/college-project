<?php 
include "./php_actions/insert-signin.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
</head>

<body>

    <?php include "_header.php" ?>

    <!-- Scss in signin.php -->
    <div class="verify">
        <?php if (isset($_SESSION['message']))
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>

    <div class="signin-container">
        <h2 class=" x">SIGN IN</h2>

        <div class="forms-body">
            <form action="" method="post" class="login-form">
                <label for="username">Username</label>
                <input type="text" name="username" id="username"
                    value="<?php if (isset($username)) echo $username; ?>" /><br>
                <div class="msg username-msg">
                    <?php
                    if (isset($error['userErr']))
                        echo $error['userErr'];
                    ?>
                </div>

                <label for=" password">Password</label>
                <input type="password" name="password" id="password" /><br>
                <div class="msg pass-msg">
                    <?php
                    if (isset($error['passErr']))
                        echo $error['passErr'];
                    ?>
                </div>

                <div class="roles">
                    <label for="role">Role:</label>
                    <select name="role" id="role" class="role" style="height: 50px;">
                        <option value="select">Select</option>
                        <option value="customer" <?php if (isset($role) && $role == 'customer') echo "selected"; ?>>
                            Customer</option>
                        <option value="trader" <?php if (isset($role) && $role == 'trader') echo "selected"; ?>>
                            Trader
                        </option>
                        <option value="admin" <?php if (isset($role) && $role == 'admin') echo "selected"; ?>>Admin
                        </option>
                    </select><br>

                    <div class="msg role-msg">
                        <?php
                        if (isset($error['roleErr']))
                            echo $error['roleErr'];
                        ?>
                    </div>

                </div>

                <input type="submit" name="submit" value="Sign In" class="sub"><br>
                <div class="msg signin-msg">
                    <?php
                    if (isset($error['signinErr']))
                        echo $error['signinErr'];
                    ?>
                </div>

                <a class="forget_pass" href="./forget-password.php">Forgot Your Password?</a>

            </form>

            <hr>

            <form action="" method=" post" class="new">
                <h3>NEW CUSTOMER?</h3>

                <a href="customer-reg.php">Reg Customer</a>

            </form>

            <hr>

            <form action="" method="post" class="new">
                <h3>NEW TRADER?</h3>

                <input type="submit" name="newtrader" value="Request Account" class="sub">
            </form>
        </div>
    </div>

    <?php include "_footer.php" ?>
</body>

</html>